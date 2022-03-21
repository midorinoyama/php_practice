<?php
// クラスはデータ（プロパティ=クラス内の変数）と処理（メソッド=クラス内の関数）をまとめたもの
//　クラス名の最初の文字は大文字
namespace sample1;

class Student
{
    // プロパティにはアクセス修飾子をつける
    public $name;

    // コンストラクタ（メソッドの初期化）
    public function __construct($name)
    {
        $this->name = $name;
    }

    // メッソドの定義（5教科の平均を計算）
    public function calAvg($data)
    {
        $sum = 0;
        for ($i = 0; $i < count($data); $i++) {
            $sum += $data[$i];
        }
        // ５教化の平均(合計/要素数)
        $avg = $sum / count($data);
        return $avg;
    }

    // メソッドの定義(平均点以上か、以下か判断)
    public function judge($avg)
    {
        //$resultに格納させる
        $result;
        if (60 <= $avg) {
            $result ="passed";
        } else {
            $result = "failed";
        }
        return$result;
    }
}
// インスタンス化(クラスを使うにはインスタンスが必要)
$a001 = new Student("佐藤");
$data = array(70, 65, 50, 90, 30);
// 平均を変数に代入
$avg = $a001->calAvg($data);
// そのavgをjudgeメソッドに代入すると判定
$result = $a001->judge($avg);

echo count($data)."教科\n";
echo $a001->name."\n";
echo "平均点".$avg."\n";
echo $result."\n";
// メッソドの実行
//$a001->avg(30, 70);
// プロパティの定義
//echo $a001->name;
