<?php
//123
//12
//1

//1行に表示させる数を3から1まで1ずつ減らす
for ($x = 3; $x >= 1; $x--) {
    //表示させる数字は1から3（行数=$x）まで、1ずつ増やす
    for ($y = 1; $y <= $x; $y++) {
        echo $y;
    }
    echo "\n";
}