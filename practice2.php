<?php
    $name = trim(fgets(STDIN));
    echo "Hello" . $name;
?>

// fgets 関数は入力した文字を受け取る

<?php
    $name = trim(fgets(STDIN));
    echo "Hello " . $name . "\n";
    
    if($name == "PHP") {
        echo "Welcome\n";
    } 
?>

<?php
    # データを受け取って表示しよう - その2
    $message = trim(fgets(STDIN));
    echo $message . "\n";
    $message = trim(fgets(STDIN));
    echo $message . "\n";
?>

//fgets(STDIN) で整数データを受け取り、変数 \$number に代入する
<?php
    # 整数データを受け取って表示しよう
    $number = trim(fgets(STDIN));
    echo $number;
?>

//条件に合わせて処理を変える 
<?php
    $name = trim(fgets(STDIN));
    echo "Hello " . $name . "\n";

    if ($name == "PHP") {
        echo "Welcome\n";
    } elseif ($name == "php") {
        echo "Good morning\n";
    } else {
        echo "Goodbye\n";
    }
?>

1. 標準入力から文字列を 1 個受け取る
2. その文字列が「Hello」に等しい場合、次のメッセージを表示する
こんにちは

3. 「Hello」に等しくない場合、次のメッセージを表示する
AAAはHelloではない    ※AAAに、その文字列を当てはめる

<?php
    # 文字列に一致しているか判定する
    $greeting = trim(fgets(STDIN));
    //echo "Hello" . $greeting . "\n";
    
    if ($greeting == "Hello"){
        echo "こんにちは\n";
    } else {
        echo $greeting . "はHelloではない\n";
    }
?>

