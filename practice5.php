//配列の基本操作
<?php
$name_1 = "勇者";
$name_2 = "魔法使い";

$team = array("勇者", "魔法使い",$name_1);
print_r($name_1);
?>

<?php
$array = array("戦士","侍","僧侶","魔法使い");

print_r($array);
?>

<?php
$item = array("回復薬", "布の服", "革の盾");

print_r($item);
?>

<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN)); 
$c = trim(fgets(STDIN));

// $a,$b,$cを指定の順番で配列$teamに代入してください
$team = array($b, $c, $a);
print_r($team);

?>

