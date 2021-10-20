<?php
$input = trim(fgets(STDIN));

$array = explode("/", $input);
print_r($array);
?>

<?php
// 標準入力から1行取得
$input = trim(fgets(STDIN));
// explode関数で文字列を分割
$array = explode("<>",$input);
// 配列全体を出力
print_r($array);
?>