<?php


//課題１
$name = "aiko";
if ($name == "aiko") {
    echo "私は愛子です";
}   else {
    echo "あなたの名前ではありません";
}


//課題２ 
$total = 0;
for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;


//課題３
$fruits = array("パイナップル","いちご","キウイ","バナナ","りんご");
foreach($fruits as $fruit) {
    echo "好きなフルーツは" . $fruit;
    echo "\n";
}

//課題４
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {
    if(($i % 5) == 0) {
        echo $i;
    }
}