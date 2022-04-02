<?php
// 抽象クラス
abstract class Item
{
    private $price;

    public function getPrice()
    {
        return $this->price;
    }

    //抽象メソッド　子クラスで定義しないとエラーになる
    abstract public function getUnit();
}

class Book extends Item
{
    public function getUnit()
    {
        return "冊";
    }
}

class Pencil extends Item
{
    public function getUnit()
    {
        return "本";
    }
}

$book = new Book();
$book->getPrice();
