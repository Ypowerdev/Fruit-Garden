<?php

include "autoload.php";

// создаём сад 
$garden = new Garden();

// ВАРИАНТ 1: создаём деревья из JSON-файла
// $trees = [];
// $trees = FabricFruitTree::createFromFile('fruittrees.json');

//ВАРИАНТ 2: создаём деревья из массива
$trees = [];
$trees = FabricFruitTree::createFromArray([
    "Apple" => [
        ["treeId"=> "63d6717b8c0b2"],
        ["treeId"=> "63d6717b8c0e1"],
        ["treeId"=> "63d6717b8c0e9"],
        ["treeId"=> "63d6717b8c0eb"],
        ["treeId"=> "63d6717b8c0ed"],
        ["treeId"=> "63d6717b8c0ee"],
        ["treeId"=> "63d6717b8c0ef"],
        ["treeId"=> "63d6717b8c0f0"],
        ["treeId"=> "63d6717b8c0f1"],
        ["treeId"=> "63d6717b8c0f2"]
    ], 
    "Pear" => [
        [ "treeId" => "63d671cea101b"  ],
        [ "treeId" => "63d671cea1043"  ],
        [ "treeId" => "63d671cea1045"  ],
        [ "treeId" => "63d671cea1046"  ],
        [ "treeId" => "63d671cea1047"  ],
        [ "treeId" => "63d671cea1049"  ],
        [ "treeId" => "63d671cea104a"  ],
        [ "treeId" => "63d671cea104b"  ],
        [ "treeId" => "63d671cea104f"  ],
        [ "treeId" => "63d671cea1050"  ],
        [ "treeId" => "63d671cea1051"  ],
        [ "treeId" => "63d671cea1052"  ],
        [ "treeId" => "63d671cea1053"  ],
        [ "treeId" => "63d671cea1054"  ],
        [ "treeId" => "63d671cea1055" ]
    ]
]);

// ВАРИАНТ 3: создаём деревья вручную
// $trees = [];
// $trees[] = FabricFruitTree::createTrees('Apple', 10);
// $trees[] = FabricFruitTree::createTrees('Pear', 15);

// добавляем деревья в сад
$garden->addPlants($trees);

foreach ($trees as $key => $value){ 
    echo  $key['fruitType']; 
}

// производим сбор продукции со всего сада
$products = $garden->getProducts();
print_r($products);


// находим количество продуктов
$totalProductsQuantity = 0; 
foreach($products as $type => &$fruits){
    $summa = 0;
    foreach($fruits as $qty){
        $summa += $qty;
    }
    $fruits = $summa;
    $totalProductsQuantity += $summa;
}

echo "<pre>";
echo "В саду деревьев: ".PHP_EOL;
echo print_r($garden->getInfo()).PHP_EOL;

echo "Собрано плодов: ".PHP_EOL;
echo $products['apples'] . " шт. яблок ".PHP_EOL;
echo $products['pears'] . " шт. груш ".PHP_EOL;
echo 'Всего: ' . $totalProductsQuantity . ' шт.'.PHP_EOL;
echo "</pre>";