﻿<?php
// 以下をfor文を使用して表示してください。

// 3
// 32
// 321
for ($x = 3; $x >= 1; $x--) {
    for ($y = 3; $y >= $x; $y--) {
        echo $y;
    }
    echo "\n";
}
