<?php
class Item
{
    private string $name;
    private int $price;

    //マジックメソッド
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    //マジックメソッド オブジェクトを呼び出した時に自動的に呼び出される
    public function __toString()
    {
        return $this->name . "/" . number_format($this->price) . "円";
    }
}

$item = new Item("PHP入門", 1500);
echo $item; //オブジェクトを呼び出した時に自動的に呼び出される
