<?php

use Carbon\Carbon;

function showDate($date)
{
    return Carbon::parse($date)->format('j F Y');
}

function addCurrency($value)
{
    return "AED ". number_format($value);
}

function showDateTime($date)
{
    return Carbon::parse($date)->format('jS \of F Y \a\t h:i:s A');
}

function showDateTimeDay($date)
{
    return Carbon::parse($date)->format('\(l\)  jS \of F Y \a\t h:i:s A');
}

