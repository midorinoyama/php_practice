<?php
class Item
{
    //静的プロパティ
    public static int $tax = 10;
    //public int $tax = 10;

    //静的メソッド
    public static function getTax(): int
    {
        return self::$tax; //静的プロパティの呼び出し
        //return 10;
        //return $this->tax; //静的メソッド内で$thiは使えない、
    }
}

// $item = new Item();
// echo $item->getTax();

// 静的メソッドはインスタンスを作らなくてもクラス名::メソッド名で呼び出せる
//echo Item::getTax();

echo Item::$tax, "\n";
Item::$tax = 8; //静的プロパティは元の設定も変える

$item02 = new Item();
echo $item02->getTax();
