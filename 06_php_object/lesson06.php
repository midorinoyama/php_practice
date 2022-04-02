<?php
class Item
{
    protected int $unit;// privateだと継承していても参照できない
    //protectedは親クラスと子クラスは参照できる、外からアクセスできない
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
    // 親のクラスと同じメソッドを宣言する＝オーバーライド
    public function getUnit(): string // 返り値は文字列
    {
        return $this->unit. "冊";
    }
}

$eraser = new Item(10);
// 親クラスのメソッドが呼び出される
echo $eraser->getUnit(), "\n";

$book = new Book(5);
// 子クラスのメソッドが呼び出される
echo $book->getUnit();
//echo $book->getUnit("冊");

//$book->unit;
//protectedは外から直接アクセスできない
