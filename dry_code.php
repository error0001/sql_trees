<?php 

function getAge($in_date) { // в качестве параметров будут год, месяц и день
    $date_brth_user = explode("-",$in_date);
    $y = $date_brth_user[0];
    $m = $date_brth_user[1]; 
    $d = $date_brth_user[2];
    if($m > date('m') || $m == date('m') && $d > date('d'))
        return (date('Y') - $y - 1); // если ДР в этом году не было, то ещё -1
    else
        return (date('Y') - $y); // если ДР в этом году был, то отнимаем от этого года год рождения
}