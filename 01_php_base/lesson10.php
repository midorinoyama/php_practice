<?php
// 今日の日付けを以下の形式で表示してください。
// xxxx年xx月xx日（x曜日）
$week = array("日曜日)", "月曜日)", "火曜日)"," 水曜日)", "木曜日)", "金曜日)", "土曜日)");

echo date("Y年m月d日("). $week[date("w")];
