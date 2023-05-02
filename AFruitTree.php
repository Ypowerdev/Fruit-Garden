<?php

/**
 * Описывает плодовое дерево
 *
 * @author Юрий Виденин <yuryhhp@gmail.com>
 */

abstract class AFruitTree
{
    public $fruitType;

    public function __construct(
        protected string $treeId,
        protected int $minFruitQuantity,
        protected int $maxFruitQuantity
    )
    {
        $this->setTreeId(uniqid());
    }

    /**
     * Возвращает количество плодов с дерева
     *
     * @return int количество плодов с одного дерева
     */
    public function getProductsQuantity(): int
    {
        return rand($this->minFruitQuantity, $this->maxFruitQuantity);
    }

    /**
     * Устанавливает уникальный регистрационный номер плодового дерева
     *
     * @param int $treeId уникальный номер дерева
     *
     * @return void
     */
    public function setTreeId(string $treeId): void
    {
        $this->treeId = $treeId;
    }

}
