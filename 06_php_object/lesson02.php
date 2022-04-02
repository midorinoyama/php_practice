<?php
class Item
{
    public string $name; // 商品名
    public int $price; // 価格

    // コンストラクタは必ずpublic、二つの値を受け取ります
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // 価格を取得する
    public function getPrice(string $end = "")
    {
        return number_format($this->price).$end;
    }
}

//PHP入門書
$php_basic = new Item("PHP入門", 1500);
// コンストラクタで値を二つ受け取る＝インスタンスで値を指定する必要がある
// コンストラクタ使えばプロパティを書かなくてもよい
//$php_basic->name = "PHP入門書";
//$php_basic->price = 150000000;
echo $php_basic->name, "/", $php_basic->getPrice("円")."\n";

//JS入門書
$js_basic = new Item("JS入門書", 1800);
//$js_basic->name = "JS入門書";
//$js_basic->price = 1800;
echo $js_basic->name, "/", $js_basic->price;
