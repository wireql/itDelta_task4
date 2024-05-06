<?php

namespace App;

class CsvWrite
{
    public static function write($data, $filename = '../../test.csv') 
    {

        $csvFile = fopen($filename, 'w');

        foreach ($data as $row) {
            fputcsv($csvFile, array_map('iconv', array_fill(0, 6, 'UTF-8'), array_fill(0, 6, 'WINDOWS-1251'),$row), ";");
        }

        fclose($csvFile);
    }
}
