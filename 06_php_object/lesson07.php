<?php
class Item
{
    protected int $unit;
    public function __construct(int $unit)
    {
        $this->unit = $unit;
    }

    public function getUnit(): string // 返り値は文字列
    //public function getUnit($end = "個"): string // 返り値は文字列
    {
        return $this->unit. "個"; // 単位をつける
        //return $this->unit. $end;
    }
}

class Book extends Item // 継承している親クラスを使える
{
    public int $page;

    // オーバーライドすると親クラスのコンストラクタを初期化できないから子クラスにも書く
    public function __construct(int $unit, int $page)
    {
        parent::__construct($unit); // parent::は自分の親クラスのメソッドを呼び出す
        $this->page = $page;
    }

    // 親のクラスと同じメソッドを宣言する＝オーバーライド
    public function getUnit(): string // 返り値は文字列
    {
        return $this->unit. "冊";
    }
}

$eraser = new Item(10);
// 親クラスのメソッドが呼び出される
echo $eraser->getUnit(), "\n";

$book = new Book(5, 120);
// 子クラスのメソッドが呼び出される
echo $book->getUnit();
//echo $book->getUnit("冊");

