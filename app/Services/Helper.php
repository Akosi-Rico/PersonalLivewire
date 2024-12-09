<?php

namespace App\Services;

use App\Contracts\TaskInterface;

trait Helper 
{
    public static function loadResponse($message, $code, TaskInterface $response)
    {
        return $response->output($message, $code);
    }

    public static function formatOriginalResponse($response)
    {
        return json_decode(json_encode($response, true))->original->message;
    }
}