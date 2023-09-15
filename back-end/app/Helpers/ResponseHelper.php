<?php

namespace App\Helpers;

class ResponseHelper
{
    public static function getHeaders(string $message): array
    {
        return [
            'X-Custom-Message' => $message,
            'Access-Control-Allow-Origin' => '*',
        ];
    }
}
