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