
<?php
include '..\Model\Product.php';

// Leer el contenido del archivo JSON
$jsonData = file_get_contents('Controller/dataProducts.json');

$data = json_decode($jsonData);
$productsJson = [];

foreach ($data as $item) {
    $product = new Product($item->id, $item->nombre, $item->descripcion, $item->precio);

    $productsJson[] = $product;
}


