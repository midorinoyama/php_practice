<?php
class Item
{
    public string $name;
}

$item = new Item();
$item->name = "PHP入門";

$item02 = clone($item);
echo $item02->name."\n";

$item->name = "JS入門"; //colneしているから$item02に影響はない
echo '$item2 = '. $item02->name. "\n";
echo '$item = '. $item->name;
