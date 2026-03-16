<?php

namespace Metarisc\OdtParser;

use Kdubuc\Odt\Odt;
use Kdubuc\Odt\Tag\Date;
use Kdubuc\Odt\Tag\Field;
use Kdubuc\Odt\Tag\Image;
use Kdubuc\Odt\Tag\Table;
use Kdubuc\Odt\Tag\Qrcode;
use Kdubuc\Odt\Tag\Segment;
use Kdubuc\Odt\Tag\Conditional;
use Metarisc\OdtParser\Tag\Lexical;
use Kdubuc\Odt\Tag\Markdown\Markdown;

class Parser
{
    public function parse(string $odtFilePath, array $pages) : Odt
    {
        /** @var Odt $odt */
        $odt      = (new Odt())->openFile($odtFilePath);
        $pipeline = [
            new Segment(),
            new Table(),
            new Conditional(),
            new Image(),
            new Qrcode(),
            new Date(),
            new Field(),
            new Markdown(),
            new Lexical(),
        ];

        return $odt->render($pages, $pipeline, []);
    }
}
