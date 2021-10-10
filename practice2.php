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

標準入力から受け取った整数を、if で判定。
各条件(100 より小さい場合、200 より小さい場合、それ以外)に合わせて、メッセージを表示する
<?php
    # 特定の条件で数値を表示
    $number = trim(fgets(STDIN));
    if ($number < 100) {
        echo $number . "は100より小さい\n";
    } elseif ($number < 200) {
        echo $number . "は100以上200より小さい\n";
    } else {
        echo $number . "は200以上\n";
    }
?>

/「ゼロ・プラス・マイナス」
<?php
    # ゼロ・プラス・マイナス
    $number = trim(fgets(STDIN));
    if ($number == 0){
        echo $number . "は0\n";
    } elseif ($number > 0){
        echo $number . "はプラス\n";
    } else {
        echo $number . "はマイナス\n";
    }    
?>

//同じ処理を何度も繰り返す
<?php
    $greeting = "Hello world";
    for ($i = 0; $i <5; $i++){
        echo $greeting . ":" . $i . "\n";
    }
?>

//for で、echo を 1000 回繰り返す
<?php
    # 1000 回繰り返す
    $greeting = "Hello paiza\n";
    echo  $greeting;
    
    for ($i = 0; $i < 1000; $i++){
        echo $greeting;
    }
?>

//受け取った整数回、for で echo を繰り返す
<?php
    # 標準入力で指定した回数繰り返す
    $greeting = "Hello paiza\n";
    $count = trim(fgets(STDIN));

    for ($i = 0; $i < $count; $i++) {
        echo $greeting;
    }
?>

//複数のデータを分類する
<?php
    $count = trim(fgets(STDIN));

    for ($i = 0; $i < $count; $i++) {
        $number = trim(fgets(STDIN));
        echo $number . "\n"
        
        if ($number == 10) {
            echo $number . "は10に等しい\n";
        } elseif ($number > 10){
            echo $number . "は10より大きい\n";
        } else {
            echo $number . "は10未満\n";
        }
    }
?>

