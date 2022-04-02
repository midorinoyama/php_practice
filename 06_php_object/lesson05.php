<?php
class Item
{
    public string $name; // 商品名
    private int $price; // 価格

    // コンストラクタは必ずpublic、二つの値を受け取ります
    public function __construct(string $name, int $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // 価格を設定するsetter
    public function setPrice(int $price)
    {
        if ($price < 0) { // 不正な値（-100円）防ぐ
            return false;
        }
        $this->price = $price;
        return true;
    }

    // 価格を取得するgetter
    public function getPrice(string $end = "")
    {
        return number_format($this->price).$end;
    }
}

class Book extends Item // 継承元のItem(親)を使うことができる
{
    public int $page; // 書籍のページ数

}

class Food extends Item
{

}

class Stationary extends Item
{

}

//PHP入門書
$php_basic = new Book("PHP入門");
$php_basic->page = 100;
$php_basic->setPrice(1500);
echo $php_basic->name, "（", $php_basic->page, "ページ）/",$php_basic->getPrice("円")."\n";

//JS入門書
$js_basic = new Item("JS入門書", 1800);
//$js_basic->name = "JS入門書";
//$js_basic->price = 1800;
//echo $js_basic->name, "/", $js_basic->price;
