<?php
// インターフェースの宣言、メソッドの内容を書くことはできない
// インターフェースにあるgetPrice()をクラス内で必ず使わないとエラーになる
interface ItemInterface
{
    public function getPrice(): int;
}

class Book implements ItemInterface // インターフェースを実装したクラス
{
    private int $price;
    public function getPrice(): int
    {
        return $this->price;
    }
}

class Pencil implements ItemInterface // インターフェースを実装したクラス
{
    private int $price;
    public function getPrice(): int
    {
        return $this->price;
    }
}
