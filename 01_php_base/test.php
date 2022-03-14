<?php
/*関数作成、引数なし
function say_hello()
{
    echo "Hello, world"."\n";
}

say_hello();*/

/*無名関数
$say_hello = function()
{
    echo "Hello, world"."\n";
};

$say_hello();*/

/*引数あり
function cal($x, $y)
{
    echo ($x + $y)."\n";
};

cal(6,7);
*/

/*戻り値
function cal($x, $y)
{
    return $x + $y;
};

$result = cal(6, 7);
echo $result;
*/
function cal($x, $y, $a)
{
    return ($x + $y + $a) / 3;
}

$result = cal(9, 4, 2);
echo $result."\n";
