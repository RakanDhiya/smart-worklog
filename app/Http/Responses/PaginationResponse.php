<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class PaginationResponse
{
    public static function success(
        string $message,
        mixed $data = null,
        int $page = 1,
        int $limit = 15,
        int $total = 0,
        int $status = 200
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'data' => $data,
            'pagination' => [
                'page' => $page,
                'limit' => $limit,
                'total' => $total,
            ],
        ], $status);
    }
}
