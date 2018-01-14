<?php


namespace App\Helper;

use App\Contract\Helper\ConverterInterface;

/**
 * Class Converter
 * @package App\Helper
 */
abstract class Converter implements ConverterInterface
{
    /**
     * Convert SimpleXML Element to json
     *
     * @param \SimpleXMLElement $xml
     * @return string
     */
    public static function xmlToJson(\SimpleXMLElement $xml): string
    {
        return json_encode($xml);
    }
}