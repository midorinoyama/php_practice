﻿<?php
// 以下をfor文を使用して表示してください。

// 321
// 21
// 1
for ($x = 1; $x <= 3; $x++) {
    for ($y = 4; $y >= $x + 1; $y--) {
        echo $y-$x;
    }
    echo "\n";
}
