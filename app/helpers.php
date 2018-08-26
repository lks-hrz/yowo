<?php

use Carbon\Carbon;

function getCarbon($date)
{
    return Carbon::parse($date);
}

function duration(Carbon $arrival, Carbon $departure)
{
    return $arrival->diffInMinutes($departure); //
}

function convertToHoursMins($time, $format = '%02d:%02d')
{
    if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    if($hours === 0.0) {
        return $minutes . " minutes";
    }
    return sprintf($format, $hours, $minutes);
}

function convertToHours($time)
{
    $hours = $time / 60;

    if ($hours >= 1){
        $hours = floor($hours);
    }else{
        $hours = number_format($hours, 2 , '.', ',');
    }

    return($hours);
}

function convertToDays($time)
{

    $days = $time / 1440;

    $nice_days = number_format($days, 2, '.', ',');



    return($nice_days);
}

function convertToWeeks($time)
{
    $weeks = $time / 10080;

    $nice_weeks = number_format($weeks, 3, '.', ',');

    return($nice_weeks);
}

function convertToMonths($time)
{
    $months = $time / 40320;

    $nice_months = number_format($months, 4, '.', ',');

    return($nice_months);
}

function convertToYears($time)
{
    $years = $time / 2096640;

    $nice_years = number_format($years, 4, '.', ',');

    return($nice_years);
}

