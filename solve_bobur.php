<?php
//1-misol
//$intervals = [[1,3],[2,6],[8,10],[9,18]];
//$result = [];
//
//$one_result = $intervals[0];
//foreach ($intervals as $interval){
//    if ($one_result[1] >= $interval[0]){
//        $one_result[1] = max($one_result[1], $interval[1]);
//    }else{
//        $result[] = $one_result;
//        $one_result = $interval;
//    }
//}
//$result[] = $one_result;
//print_r($result);

//2-misol
//function findMaxInterval($nums) {
//    asort($nums);
//    $nums = array_values($nums);
//    $result = [];
//    if (count($nums) > 1){
//        for ($i = 0; $i < count($nums) - 1; $i++) {
//            $interval = $nums[$i + 1] - $nums[$i];
//            array_push($result, $interval);
//        }
//
//        $maxInterval = max($result);
//        return $maxInterval;
//    }else{
//        return 0;
//    }
//
//}
//$nums = [10, 5, 1, 2, 6, 100];
//$findMaxInterval = findMaxInterval($nums);
//print_r($findMaxInterval);

//3-misol


//4-misol
//function findGivenString($s, $p) {
//    $length = strlen($s);
//    $substringLength = strlen($p);
//    $result = [];
//    for ($i = 0; $i <= $length - $substringLength; $i++) {
//        $substring = substr($s, $i, $substringLength);
//
//        $characters_s = str_split($substring);
//        sort($characters_s);
//        $string_s = implode("", $characters_s);
//
//        $characters_p = str_split($p);
//        sort($characters_p);
//        $string_p = implode("", $characters_p);
//
//        if ($string_s == $string_p) {
//            $result[] = $i;
//        }
//    }
//    return $result;
//}
//
//$s = "abab";
//$p = "ab";
//$output = findGivenString($s, $p);
//print_r($output);

//5-misol
//function findRomanNumber($number){
//    $birlik = [
//        0 => "", 1 => "I", 2 => "II", 3 => "III", 4 => "IV", 5 => "V", 6 => "VI", 7 => "VII", 8 => "VIII", 9 => "IX"
//    ];
//    $onlik = [
//        0 => "", 1 => "X", 2 => "XX", 3 => "XXX", 4 => "XL", 5 => "L", 6 => "LX", 7 => "LXX", 8 => "LXXX", 9 => "XC"
//    ];
//    $yuzlik = [
//        0 => "", 1 => "C", 2 => "CC", 3 => "CCC", 4 => "CD", 5 => "D", 6 => "DC", 7 => "DCC", 8 => "DCCC", 9 => "CM"
//    ];
//
//    $number_str = (string)$number;
//    $length = strlen($number_str);
//    $number_array = [];
//    for ($i = 0; $i < $length; $i++) {
//        $digit = $number_str[$i];
//        $number_array[] = (int)$digit;
//    }
//
//    $romanNumber = "";
//    if ($length >= 3) {
//        $romanNumber .= $yuzlik[$number_array[$length - 3]];
//    }
//    if ($length >= 2) {
//        $romanNumber .= $onlik[$number_array[$length - 2]];
//    }
//    $romanNumber .= $birlik[$number_array[$length - 1]];
//    return $romanNumber;
//}
//
//// Test
//$number = 158;
//$roman = findRomanNumber($number);
//echo "$number sonini rim raqamdagi korinishi: $roman\n";



