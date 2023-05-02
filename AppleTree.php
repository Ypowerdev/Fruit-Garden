<?php

class AppleTree extends AFruitTree 
{
    public  $fruitType;

    public function __construct(
        protected string $treeId = '',
        protected int $minFruitQuantity = 40,
        protected int $maxFruitQuantity = 50,
    )
    {
        $this->fruitType = 'apples';
    }
}
