<?php

use Illuminate\Support\Carbon;

if (! function_exists('date_today')) {
    function date_today()
    {
        return Carbon::now()->format('l d F Y');
    }
}