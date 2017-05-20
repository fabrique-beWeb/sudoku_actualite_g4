<?php
$bigbrother = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$bigbrotherY = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$bigbrotherX = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$iMax= 0;
$iMin= 0;
$jMax= 0;
$jMin= 0;
$offset= 3;

/*while ($jMax < 9){
    $iMax = $iMin.$offset;
    $jMax = $jMin.$offset;
    
    for ($i = $iMin; $i<$iMax; $i++){
        for($i = $iMin; $i>$iMaw; $i++){
            
        }
    }
    $iMin = $iMax;
    if($iMin == $offset*3){
       $iMin = 0;
       $iMax = $offset;
       $jMin = $jMax;
    }
    
}*/

$_1 = array();
$_2 = array();
$_3 = array();
$_4 = array();
$_5 = array();
$_6 = array();
$_7 = array();
$_8 = array();
$_9 = array();

$littlesister = array($_1, $_2, $_3, $_4, $_5, $_6, $_7, $_8, $_9);


$tab = array();
$j0 = 0;
$h0 = 0;
$_1 = array([$j0, $h0]);



for ($i = 0; $i < count($bigbrother); $i++) {

    if ($i == 0) {
        $stockIndexX = $j0;
        $stockIndexY = $h0;
        $posX = array_search($stockIndexX, $bigbrotherX);
        $posY = array_search($stockIndexY, $bigbrotherY);
// Remove from array
        unset($bigbrotherX[$posX]);
        unset($bigbrotherY[$posY]);


        $randomX = array_rand($bigbrotherX);
        $randomY = array_rand($bigbrotherY);

        $j2 = $randomX;
        $h2 = $randomY;
        array_push($_1, [$j2, $h2]);
    }

    else if ($i >= 1) {
        //print_r($bigbrother);
        unset($bigbrotherX[$j2]);
        unset($bigbrotherY[$h2]);
        $randomX = array_rand($bigbrotherX);
        $randomY = array_rand($bigbrotherY);

        $j2 = $randomX;
        $h2 = $randomY;
        array_push($_1, [$j2, $h2]);
    }
}

print_r($_1);
print_r($bigbrotherX);
print_r($bigbrotherY);
