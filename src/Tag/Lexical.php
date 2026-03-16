<?php

namespace Metarisc\OdtParser\Tag;

use Kdubuc\Odt\Odt;
use Assert\Assertion;
use Kdubuc\Odt\Tag\Tag;
use Adbar\Dot as ArrayDot;
use Metarisc\LexicalParser\Converter\Converter;

class Lexical extends Tag
{
    /*
     * Regex to isolate tag inside Odt content.
     */
    protected function getRegex() : string
    {
        return "/{lexical:(?'key'[\w.]+)}/";
    }

    /*
     * Render process : Within odt, edit tag with data bag.
     */
    protected function render(Odt $odt, ArrayDot $data, array $tag_infos) : Odt
    {
        // Get tag informations
        Assertion::string($tag_infos[0]);
        $tag = preg_quote($tag_infos[0], '/');

        $key = $tag_infos['key'];
        Assertion::string($key);

        /** @var string|null $value */
        $value = $data->get($key);

        if (null !== $value) {
            /** @var non-empty-string $result */
            $result = (new Converter())->convert($value, ['output_format' => 'odt']);

            $doc = new \DOMDocument();
            $doc->loadXML($result);

            // Ajout du contenu du lexical <office:text>
            if (preg_match('/<office:text[^>]*>(.*?)<\/office:text>/s', $result, $textMatches)) {
                $officeTextContent = $textMatches[1];
                $content           = $odt->getEntryContents('content.xml');

                // Remplacer toute la balise <text:p> qui contient le tag pour éviter l'imbrication
                // On cherche la balise <text:p> qui contient notre tag
                $pattern = "/<text:p[^>]*>\s*".$tag."\s*<\/text:p>/";

                // Si le tag est dans une balise <text:p>, on remplace toute la balise
                if (preg_match($pattern, $content)) {
                    $odt->addFromString('content.xml', preg_replace($pattern, $officeTextContent, $content));
                } else {
                    // Sinon, remplacement simple du tag
                    $odt->addFromString('content.xml', preg_replace("/$tag/", $officeTextContent, $content));
                }
            }

            // Récupération de tous les styles dans le lexical
            if (preg_match('/<office:automatic-styles[^>]*>(.*?)<\/office:automatic-styles>/s', $result, $styleMatchesLexical)) {
                $stylesFromLexical = $styleMatchesLexical[1];
                $content           = $odt->getEntryContents('content.xml');

                // Récupération de tous les styles dans l'odt
                if (preg_match('/<office:automatic-styles[^>]*>(.*?)<\/office:automatic-styles>/s', $content, $styleMatchesOdt)) {
                    $stylesFromOdt = $styleMatchesOdt[1];

                    // Fusion des styles
                    $styles = $stylesFromOdt.$stylesFromLexical;
                    // Remplacement des styles dans l'odt
                    $new_content = preg_replace('/<office:automatic-styles[^>]*>.*?<\/office:automatic-styles>/s', "<office:automatic-styles>$styles</office:automatic-styles>", $content);

                    // Mise à jour du contenu de l'odt
                    $odt->addFromString('content.xml', $new_content);
                }
            }
        }

        // var_dump($odt->getEntryContents('content.xml'));
        return $odt;
    }
}
