<?php
// 以下をfor文を使用して表示してください。

// 123
// *12
// **1

for ($x = 3; $x >= 1; $x--) {
    for ($z = 2; $z >= $x; $z--) {
        echo "*";
    }
    for ($y = 1; $y <= $x; $y++) {
        echo $y;
    }
    echo "\n";
}

/*
//$yは3から1の間1ずつ減る=$x($x=3;$x>=1;$x--)
//$zは0から2の間1ずつ増えるが、条件下を3から1の間1ずつ減るに変更させる
// 123
for ($z = 2; $z >= 3; $z--) {
    echo "*";
}
for ($y = 1; $y <= 3; $y++) {
    echo $y;
}
echo "\n";

// *12
for ($z = 2; $z >= 2; $z--) {
    echo "*";
}
//for ($z = 1; $z <= 1; $z++) {
//    echo "*";
//}
for ($y = 1; $y <= 2; $y++) {
    echo $y;
}
echo "\n";

// **1
for ($z = 2; $z >= 1; $z--) {
    echo "*";
}
//for ($z = 1; $z <= 2; $z++) {
//    echo "*";
//
for ($y = 1; $y <= 1; $y++) {
    echo $y;
}
*/
