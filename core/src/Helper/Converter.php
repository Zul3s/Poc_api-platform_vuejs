<?php


namespace App\Helper;

abstract class Converter
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