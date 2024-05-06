<?php

namespace App;

class XmlParser
{
    public static function parse($url) 
    {
        return simplexml_load_string(file_get_contents($url));
    }
}
