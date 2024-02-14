<?php
  
use Carbon\Carbon;
  
/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertYmdToMdy')) {
    function convertHisToHi($time)
    {
        return Carbon::createFromFormat('H:i:s', $time)->format('H:i');
    }
}

