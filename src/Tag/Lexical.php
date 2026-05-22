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
        Assertion::string($tag_infos[0]);
        $tag = preg_quote($tag_infos[0], '/');

        $key = $tag_infos['key'];
        Assertion::string($key);

        // Récupère la valeur associée à la clé
        /** @var string|null $value */
        $value   = $data->get($key);

        // Décode la valeur JSON
        /** @var array|null $decoded */
        $decoded = json_decode($value ?? '', true);

        // Si la valeur existe, n'est pas vide et contient une clé 'root'
        if (null !== $value && '' !== $value && isset($decoded['root'])) {
            // Convertit le contenu JSON au format ODT
            /** @var non-empty-string $result */
            $result = (new Converter())->convert($value, ['output_format' => 'odt']);



            // Charge le XML dans un DOMDocument pour valider sa structure
            // Note : libxml_use_internal_errors permet d'éviter que les warnings liés aux namespaces non définis ne soient convertis en exceptions 
            $doc = new \DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadXML($result);
            libxml_clear_errors();

            // Extrait le contenu texte du résultat
            // Extrait et remplace le contenu texte du tag
            if (preg_match('/<office:text[^>]*>(.*?)<\/office:text>/s', $result, $textMatches)) {
                $officeTextContent = $textMatches[1];
                $content           = $odt->getEntryContents('content.xml');
                $pattern           = "/<text:p[^>]*>(?:<text:s[^>]*\/>)?\s*".$tag."\s*<\/text:p>/";

                // Remplace le tag par son contenu
                if (preg_match($pattern, $content)) {
                    $odt->addFromString('content.xml', preg_replace($pattern, $officeTextContent, $content));
                } else {
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
                    $styles        = $stylesFromOdt.$stylesFromLexical;
                    // Remplace la balise styles par les styles fusionnés
                    $new_content   = preg_replace('/<office:automatic-styles[^>]*>.*?<\/office:automatic-styles>/s', "<office:automatic-styles>$styles</office:automatic-styles>", $content);
                    $odt->addFromString('content.xml', $new_content);
                }
            }
        } else {
            // Si la valeur est vide ou invalide, supprime le tag
            $content = $odt->getEntryContents('content.xml');
            $pattern = "/<text:p[^>]*>(?:<text:s[^>]*\/>)?\s*".$tag."\s*<\/text:p>/";

            // Essaie de supprimer le tag du paragraphe
            if (preg_match($pattern, $content)) {
                $odt->addFromString('content.xml', preg_replace($pattern, '', $content));
            } else {
                $odt->addFromString('content.xml', preg_replace("/$tag/", '', $content));
            }
        }

        // var_dump($odt->getEntryContents('content.xml'));
        return $odt;
    }
}