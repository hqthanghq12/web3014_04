<?php
// Đây hàm có trả về + không có tham số
 
function tongHaiSo(){
    $a = 5;
    $b = 10;
    return $a + $b;
}
// gọi hàm có tham số
 $tong = tongHaiSo();
 $c = tongHaiSo() + 10 ;
 echo tongHaiSo();

 function tongBaSo($a, $b, $c){
    echo $a + $b + $c;
 }

 tongBaSo(5, 6, 7);