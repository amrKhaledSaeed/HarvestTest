<?php
namespace App\Traits;

/**
 *
 */
trait helpers
{
    function apiResponse($data, $status = 200)
    {
        return response()->json($data, $status);
    }
}






