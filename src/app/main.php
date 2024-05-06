<?php

require_once '../XmlParser.php';
require_once '../CsvWrite.php';

use App\XmlParser;
use App\CsvWrite;

$data = XmlParser::parse($_POST['url']);
$offers = [];

$offers[] = [
    'Наименование категории', 
    'Наименование товара', 
    'Ссылка на товар', 
    'Цена товара', 
    'Описание товара', 
    'Страна'
];

for ($i=0; $i < 10; $i++) { 

    foreach ($data->shop->categories->category as $category) {

        if((int)$category['id'] == (int)$data->shop->offers->offer[$i]->categoryId) {

            $offers[] = [
                trim($category), 
                $data->shop->offers->offer[$i]->name, 
                $data->shop->offers->offer[$i]->url, 
                $data->shop->offers->offer[$i]->price, 
                $data->shop->offers->offer[$i]->description, 
                $data->shop->offers->offer[$i]->country_of_origin
            ]; 

        }
    }
}

CsvWrite::write($offers);

echo "Файл записан.";