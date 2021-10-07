// echo ではデータをコンソールに出力することができます。
// PHP_EOL を使うと改行することができます。

//int型
echo 20 . PHP_EOL;

//float型。 PHPでは一つの浮動小数点数しか存在しません。(float, double も同じ)。　
//IEEE 754 double precision精度を使っているのでdoubleと同じ精度を持っています。
echo 20.345353 . PHP_EOL;
echo gettype(20) . PHP_EOL;
echo gettype(20.345353) . PHP_EOL;

//計算
echo 234 * 243.43 . PHP_EOL;
echo 234 + 243.43 . PHP_EOL;

// 3
echo 3 . PHP_EOL;
// 7.5
echo 7.5 . PHP_EOL;
// 8.0675
echo 8.0675 . PHP_EOL;
// 3 * 0.5
echo 3 * 0.5 . PHP_EOL;
// 4.5のデータ型を調べてみましょう

//echo gettype(3 * 0.5) . PHP_EOL;
//8 + 3 について、8 + 3 を式（expression）、+ の部分は演算子（operator）、8 と 3 の部分はオペランド（operand）と呼ばれます。演算子がオペランドを操作して、式を形成しています。