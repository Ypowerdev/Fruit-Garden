<?php

/**
 * Создает плодовое дерево или массив плодовых деревьев
 *
 * @author Юрий Виденин <yuryhhp@gmail.com>
 */

class FabricFruitTree
{
    /**
     * @return AFruitTree[]
     */
    public static function createFromArray(array $config): array
    {
        $trees = [];

        foreach ($config as $type => $fruits) {
            foreach ($fruits as $key => $fruit) {
                $trees[] = self::create($type, $fruit['treeId']);
            }
        }

        return $trees;
    }

    /**
     * @return AFruitTree[]
     */
    public static function createFromFile(string $fileName): array 
    {
        $config = json_decode(file_get_contents($fileName), true);
       
        $result = self::createFromArray($config);
         
        return $result;
    }

    public static function create(string $type, string $treeId = ''): AFruitTree
    {
        $treeId = $treeId ?? uniqid();

        switch ($type) {
            case 'Apple':
                return new AppleTree($treeId);
            case 'Pear':
                return new PearTree($treeId);
        }
    }

    /**
     * @return AFruitTree[]
     */
    public static function createTrees(string $type, int $qty = 0): array
    {
        $trees = [];

        for ($i = 0; $i < $qty; $i++) {
            $trees[] = self::create($type);
        }

        return $trees;
    }

}
