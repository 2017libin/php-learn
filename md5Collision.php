<?php
$str1 = '6';
$str2 = md5(1231);
var_dump($str2);

if($str2 == $str1){
    echo "colliso!\n";
}
echo "hello!\n";
?>