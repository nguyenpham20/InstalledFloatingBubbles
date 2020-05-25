<?php
function bubblesSort($list) {
    for ($i = 0; $i < count($list); $i++) {
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$i] > $list[$j]){
                $tmp = $list[$j];
                $list[$j] = $list[$i];
                $list[$i] = $tmp;
            }
        }
    }
    return $list;
}
$list = [2,3,2,5,6,1,-2,3,14,12];
echo "Mang goc:";
echo implode(",", bubblesSort($list)). "<br/>";
echo "Mang sap xep:";
echo implode(',', bubblesSort($list));
