<?php
//〇〇〇■
//〇〇■ ■ ■
//〇■ ■ ■ ■ ■
//■ ■ ■ ■ ■ ■ ■

//段数は4段
$stage = 4;
//スペースの初期値は段数-1
$space = $stage - 1;
//ブロックの初期値は必ず1から始まる
$block = 1;

//段数を管理するループ
for ($a = 1; $a <= $stage; $a++) {
    for ($b = 1; $b <= $space; $b++) {
        echo " ";
    }
    for ($c = 1; $c <= $block; $c++) {
        echo "■";
    }
    echo "\n";
    $space--;
    $block += 2;
}
