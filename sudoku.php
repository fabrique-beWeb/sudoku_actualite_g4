<?php
$tableIndex = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$tableIndexY = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$tableIndexX = array(1, 2, 3, 4, 5, 6, 7, 8, 9);


$_1 = array();
$_2 = array();
$_3 = array();
$_4 = array();
$_5 = array();
$_6 = array();
$_7 = array();
$_8 = array();
$_9 = array();

$tab = array();
$j0 = 0;
$h0 = 0;
$_1 = array([$j0, $h0]);

//$iMax= 0;
//$iMin= 0;
//$jMax= 0;
//$jMin= 0;
//$offset= 3;

for ($i = 0; $i < count($tableIndex); $i++) {

    if ($i == 0) {
        $stockIndexX = $j0;
        $stockIndexY = $h0;
        $posX = array_search($stockIndexX, $tableIndexX);
        $posY = array_search($stockIndexY, $tableIndexY);
// Remove current index from array
        unset($tableIndexX[$posX]);
        unset($tableIndexY[$posY]);

// generate random index
        $randomX = array_rand($tableIndexX);
        $randomY = array_rand($tableIndexY);

        $j2 = $randomX;
        $h2 = $randomY;
        array_push($_1, [$j2, $h2]);
    }

    else if ($i >= 1) {
        unset($tableIndexX[$j2]);
        unset($tableIndexY[$h2]);
        $randomX = array_rand($tableIndexX);
        $randomY = array_rand($tableIndexY);

        $j2 = $randomX;
        $h2 = $randomY;
        array_push($_1, [$j2, $h2]);
    }
}

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

print_r($_1);

//print_r($tableIndexX);
//print_r($tableIndexY);
