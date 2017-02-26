<?php
//Written by eben@shinningweb.com
//How to find the last day of every month for any year

date_default_timezone_set('Africa/Accra');
$year = 2016; //or $year = date('Y'); for current year

//months array, start key should be defined, else will begin months from 0
$month =['1'=>'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

//loop through months and tell us the last day of each month
foreach ($month as $key => $value) 
{
//show the number of days in each month
echo 'Last day of '.$value.' '.$year.' is  '.cal_days_in_month(CAL_GREGORIAN, $key, $year).'<br/>';
}
?>
