<?php

/**
 * Описывает сад
 *
 * @author Юрий Виденин <yuryhhp@gmail.com>
 */

class Garden
{

    /**
     * Инициализирует сад
     *
     * @param array AFruitTree $plants массив объектов AFruitTree
     */
    public function __construct(protected array $plants = [])
    {
        $this->plants = $plants;
    }

    /**
     * Добавляет растение в сад
     *
     * @param array $plants массив объектов AFruitTree
     */
    public function addPlant(AFruitTree $plant)
    {
        array_push($this->plants, $plant);
    }

    /**
     * Добавляет растения в сад
     *
     * @param array AFruitTree $plants массив растений
     */
    public function addPlants(array $plants = [])
    {
        array_push($this->plants, ...$plants);
    }

    /**
     * Сбор продукции
     *
     * @param array $plants массив объектов AFruitTree
     */
    public function getProducts(): array
    {
        $products = [];

        foreach ($this->plants as $plant) {
            $products[$plant->fruitType][] = $plant->getProductsQuantity();
        }
        
        return $products;
        
    }

    /**
     * Возвращаем информацию о растениях в саду
     *
     * @return array массив объектов AFruitTree (хотя нужно бы APlants :D )
     */
    public function getInfo()
    {
        $info = [];

        foreach($this->plants as $plant)
        {
            $info[] = $plant->fruitType;
        }
        print_r($info); 
        return array_count_values($info);
    }
}
