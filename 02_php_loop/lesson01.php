<?php
// 以下をfor文を使用して表示してください。

// 1
// 21
// 321

for ($x =1; $x <= 3; $x++) {
    for ($y = $x; $y >= 1; $y--) {
        echo $y;
    }
    echo "\n";
}

/*
//1
for ($y = 1; $y >= 1; $y--) {
    echo $y;
}
echo "\n";
//21
for ($y = 2; $y >= 1; $y--) {
    echo $y;
}
echo "\n";
//321
for ($y = 3; $y >= 1; $y--) {
    echo $y;
}
//$yは1から3の間、1ずつ増える条件下で動く=$x($x=1;$x <=3;$x++)
*/
