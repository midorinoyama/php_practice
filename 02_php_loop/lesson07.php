<?php
// 以下をfor文を使用して表示してください。
// ヒント: forの中でforを３回使用

// ***1
// **121
// *12321
// 1234321

//タテの表示
for ($x = 1; $x <= 4; $x++) {
    //  *を表示するループ
    for ($y = 3; $y >= $x; $y--) {
        echo "*";
    }
    //  1,12,123を表示1ずつ増加まで
    for ($y = 1; $y < $x; $y++) {
        echo $y;
    }
    // 21,321,4321を表示
    for ($y = $x; $y >= 1; $y--) {
        echo $y;
    }
    echo "\n";
}

/*タテの表示で$x($x=1;$x<=4;$x++),1から4で変化できるものは$xに置き換える
for ($i = 3; $i >= 1; $i--) {
    echo "*";
}
echo "\n";
for ($i = 3; $i >= 2; $i--) {
    echo "*";
}
echo "\n";
for ($i = 3; $i >= 3; $i--) {
    echo "*";
}
echo "\n";
for ($i = 3; $i >= 4; $i--) {
    echo "*";
}
*/
/* ,1,12,123
for ($y = 1; $y < 1; $y++) {
    echo $y;
}
echo "\n";
for ($y = 1; $y < 2; $y++) {
    echo $y;
}
echo "\n";
for ($y = 1; $y < 3; $y++) {
    echo $y;
}
echo "\n";
for ($y = 1; $y < 4; $y++) {
    echo $y;
}
*/
/*
// 1,21,321,4321
for ($z = 1; $z >= 1; $z--) {
    echo $z;
}
echo "\n";
for ($z = 2; $z >= 1; $z--) {
    echo $z;
}
echo "\n";
for ($z = 3; $z >= 1; $z--) {
    echo $z;
}
echo "\n";
for ($z = 4; $z >= 1; $z--) {
    echo $z;
}*/
