<?php

class PearTree extends AFruitTree 
{   
    public  $fruitType;

    public function __construct(
        protected string $treeId = '',
        protected int $minFruitQuantity = 0,
        protected int $maxFruitQuantity = 20,
    )
    {
        $this->fruitType = 'pears';
    }
}
