//標準入力で与えられる整数回分「スライムがあらわれた。」と
出力するプログラムをfor文で作ってください。

<?php
$input = trim(fgets(STDIN));
for($i=0; $i < $input; $i++){
    echo "スライムが現れた。\n";
}

?>

//「指定行数分、標準入力を取得する」
<?php
// 1行目の標準入力を取得
$input1 = trim(fgets(STDIN)); 

// $input1の回数分だけループを回す
for($i=0; $i < $input1; $i++){
    // 2行目以降の標準入力の取得
    echo trim(fgets(STDIN)); 
}

?>

//西暦年と平成年の対応表を作る 
<?php
// Here your code !
for($year =1989; $year <= 2015; $year++){
    $heisei = $year - 1988;
    echo "西暦". $year ."年は平成".$heisei ."年です。\n";
}

?>
