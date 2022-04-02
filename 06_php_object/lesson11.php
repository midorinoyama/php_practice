<?php
//トレイト
//トレイト内で同じメソッド名は使えない

//日本の消費税
trait Tax
{
  //消費税を返す
  public function getTax(): int
  {
      return 10;
  }
}

//海外の消費税
trait ForeignTax
{
  //消費税を返す
  public function getTax(): int
  {
      return 20;
  }
}


class Item
{
    use Tax, ForeignTax //タックスを2つ使いたい
    {
        Tax::getTax insteadof ForeignTax; //ForeignTaxの代わりにTaxのgetTaxを使います
        ForeignTax::getTax as getForeignTax;// ForeignTaxのgetTaxをgetForeignTaxとして名前を変える
      }
    private int $price;
}

class Service
{
    use Tax; // タックスを1つ使いたい
    private int $service_price;
}

$item = new Item();
echo $item->getTax()."\n";
echo $item->getForeignTax()."\n";

$service = new Service();
echo $service->getTax()."\n";
