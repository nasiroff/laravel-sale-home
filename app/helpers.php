<?php


function calcTimeDiff($time, $currentTime = "now"){
    $dateTime = new DateTime($currentTime);

    $interval = $dateTime->diff(new DateTime($time));

    if (is_null($time)) {
        return "Unknown share date";
    }

    $str = "";

    if ($interval->y == 1){
        $str .= "%Y year ";
    }elseif ($interval->y >= 2){
        $str .= "%Y years ";
    }

    if ($interval->m == 1){
        $str .= "%m month ";
    } elseif ($interval->m >= 2) {
        $str .= "%m months ";
    }

    if ($interval->d == 1){
        $str .= "%d day ";
    }elseif ($interval->d >= 2){
        $str .= "%d days ";
    }

    $str .= "ago";

    return $interval->format($str);
}
