// while文でループ処理
<?php
// Here your code !
$i = 1;
while($i <= 10){
    echo $i . "\n";
    $i++;
}
?>
// 20以下の場合ループを続けるという書き方
<?php
$i = 1;

while($i <= 20){
    echo $i . "\n";
    $i++;
}
?>

//21未満の場合ループを続けるという書き方
<?php
$i=10;
while($i < 21){
    echo $i."\n";
    $i++;
}
?>

//10〜20までの数字を出力してみよう
<?php
$i = 10;
while($i < 21){
    echo $i . "\n";
    $i ++;
}
?>

<?php
// Here your code !
$i = 1;
while($i <= 50){
    // 繰り返し実行する処理
    echo "<option>" .$i."歳</option>";
    $i++;
}
?>

//while文でループ処理
<select name="year">
<?php
$i = trim(fgets(STDIN));
$input = trim(fgets(STDIN));
while($i <= $input){
    echo "<option>" .$i."年生まれ</option>\n";
    $i++;
}
?>
</select>

//for文でループをスマートに
<?php

for($i = 1; $i <= 10; $i++){
    echo $i . "\n";
}

?>

<?php
for($i = 1; $i <= 20; $i++) {
    echo $i . "\n";
}
?>

//10以上の際にループがまわる書き方
<?php
for($i=20; $i>=10; $i--) {
    echo $i . "\n";
}

?>

//標準入力で二つ（２行）の整数が与えられます。
1行目の数値から２行目の数値までを1づつ加算しながら
1行づつ順番に出力するプログラムをfor文で書いてください

<?php
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));
for($i=$input1; $i <= $input2; $i++){
    echo $i . "\n";
}

?>

