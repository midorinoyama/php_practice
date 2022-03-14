<?php
// 引数として数値を渡すと+1して返す関数を作り、
// 返り値を出力してください。
function getSum($num)
{
    return $num++;
}

$sum = getSum(5);
echo $sum;
