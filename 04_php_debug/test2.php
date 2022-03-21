<?php

// デバック練習
// 氏名入力時に入力内容が表示されるようにプログラムを完成させてください。
namespace SelfIntroduction;

$createAgeGroup = function () {
    $maxAge = 70;
    $minAge = 18;
    $ageGroup = array();
    for ($i = $minAge; $i <= $maxAge; $i++) {
        array_push($ageGroup, $i);
    }
    return $ageGroup;
};

class SelfIntroduction
{
    // プロパティ(変数)の定義
    public $lastName;
    public $firstName;
    public $age;
    public $hobby;
    /*private $lastName;
    private $firstName;
    private $age;
    private $hobby;*/

    // コンストラクタ(プロパティをインスタンスの生成と同時に代入)
    public function __construct(
        //string
        $lastName,
        //string
        $firstName,
        //int
        $age,
        //string
        $hobby
    ) {
        $this->lastName     = $lastName;
        $this->firstName    = $firstName;
        $this->age          = $age;
        $this->hobby        = $hobby;
    }

    // メソッドの定義
    public function getFullName()
    {
        //echo "私の名前は".$this->lastName.$this->firstName."です";
        return $this->lastName.$this->firstName;
    }

    public function getAge()
    {
        //echo "年齢は".$this->age."です";
        return $this->age;
    }

    public function getHobby()
    {
        return $this->hobby;
    }
}

// インスタンスの生成
//$selfIntroduction = new SelfIntroduction("lastName", "firstName", "age", "hobby");
//$selfIntroduction = new SelfIntroduction("苗字", "名前", "20", "釣り");
/*echo $selfIntroduction->getFullName()."\n";
echo $selfIntroduction->getAge()."\n";
echo $selfIntroduction->getHobby()."\n";*/

//$user = new SelfIntroduction("山田", "太郎", 25, "サーフィン");
//echo $user->getFullName();
//echo $user->getAge();
//echo '私の名前は'.$user->getFullName().'年齢は'.$user->getAge().'です。';
//echo '趣味は'. $user->getHobby().'です。';
//echo '私の名前は'.$selfIntroduction->getFullName().'年齢は'.$selfIntroduction->getAge().'です。';
if (! empty($_POST)) {
    $lastName         = $_POST['last_name'];
    $firstName        = $_POST['first_name'];
    $age              = $_POST['age'];
    $hobby            = $_POST['hobby'];
    $selfIntroduction = new SelfIntroduction("$lastName", "$firstName", "$age", "$hobby");
    if (! empty($selfIntroduction)) {
        echo '私の名前は'.$selfIntroduction->getFullName().'年齢は'.$selfIntroduction->getAge().'です。';
        echo '<br>';
        echo '趣味は'. $selfIntroduction->getHobby().'です。';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>デバック練習</title>
</head>
<body>
    <section>
    <form action='./test2.php' method="post">
        <label>姓</label>
        <input type="text" name="last_name"/>
        <label>名</label>
        <input type="text" name="first_name" />
        <label>趣味</label>
        <input type="text" name="hobby" />
        <select name="age">
            <?php foreach ($createAgeGroup() as $age) :?>
                <option value="<?php echo $age ?>" ><?php echo $age ?> </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="送信する"/>
    </form>
    </section>
</body>
</html>
