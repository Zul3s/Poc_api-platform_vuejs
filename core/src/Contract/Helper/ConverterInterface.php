<?php

namespace App\Contract\Helper;

/**
 * Interface ConverterInterface
 * @package App\Contract\Helper
 */
interface ConverterInterface
{
    /**
     * Convert SimpleXML Element to json
     *
     * @param \SimpleXMLElement $xml
     * @return string
     */
    public static function xmlToJson(\SimpleXMLElement $xml): string;
}