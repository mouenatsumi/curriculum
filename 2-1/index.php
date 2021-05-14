<?php
echo "Hello World!!"
?>
<html>
    <p>I say that <?php echo "Hello World!!"; ?> </p>
</html>
<?php
//ダブルクォーテーションで囲まれているので文字列
$message = "Hello World";
//index.php
echo $message;
//Hello World!を出力した後に改行
echo '<br>'
?>
<?php
//echo $message;の次の行から続き
$x = 8;
$y =5.55;
echo $x;
//8を出力した後に改行
echo '<br>';
echo $y;
echo'<br>'
?>

<?php
$message = "Hello World!";
var_dump($message);

$x = 8;
$y =5.55;
echo '<br>';
var_dump($x);
echo '<br>';
var_dump($y);
echo'<br>'
?>

<?php
// 改行コードは適宜挟んでください。
$flag = true;
var_dump($flag);
echo'<br>'
?>

<?php
$emp = null;
var_dump($emp);
echo'<br>'
?>

<?php
$en_words = 'Hello World';
var_dump($en_words);
echo '<br>';
$ja_words = 'こんにちは';
var_dump($ja_words);
?>

<?php
// index.php
// 変数：データにつけるラベル（変更可能）
// 定数：変更不可

define("ADMIN_EMAIL", "y-i-group@gmail.com");
define("LIST_COUNT", 15);

echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;


echo 1 + 1;
// 改行は適宜入れた方が見やすくなります。
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2 * 2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3;
echo '<br>'
?>

<?php
$age = 18;

if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}
echo '<br>'
?>

