<?php
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください
/*strtotime()
echo "現在日時は". date("Y年m月d日 H時i分s秒"). "\n";
echo "3日後は". date("Y年m月d日 H時i分s秒", strtotime("+3 days")). "\n";
echo "12時間前は". "\n".  date("Y年m月d日 H時i分s秒", strtotime("-12 hours"))."\n";
*/

//DateTimeクラス
$today = new DateTime();
$date1 = new DateTime("2020-01-01");

$diff = $today->diff($date1);

echo "現在日時は" .$today->format("Y年m月d日 H時i分s秒"). "\n";
echo "3日後は". $today->modify("+3 days")->format("Y年m月d日 H時i分s秒"). "\n";
echo "12時間前は". $today->modify("-12 hours")->format("Y年m月d日 H時i分s秒"). "\n";
echo "2020年元旦から現在までの経過日数は". $diff->format("%Y年%mヵ月%d日"). "\n";
