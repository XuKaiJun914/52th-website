<?php
$num = readline();
$data = [];
foreach(range(1,$num) as $m){
    $data[] = hashCode(readline());
}
foreach($data as $m){
    print $m."\n";
}

function overflow32($v){
    $v = $v % pow(2,32);
    if($v > pow(2,31)-1) return $v - pow(2,32);
    if($v < -pow(2,31)) return $v + pow(2,32);
    return $v;
}
function hashCode($str){
    $total = 0;
    foreach(range(0,strlen($str)-1) as $i){
        $total = overflow32(31 * $total + ord($str[$i]));
    }
    return $total;
}