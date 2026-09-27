<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class CommonResponse
{
    public static function success(
        string $message,
        mixed $data = null,
        int $status = 200
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $status);
    }
}
