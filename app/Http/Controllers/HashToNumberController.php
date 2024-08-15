<?php

namespace App\Http\Controllers;

use App\Http\Requests\HashToNumberRequest;
use Illuminate\Http\JsonResponse;

class HashToNumberController extends Controller
{
    private const MIN = 1;
    private const MAX = 100;

    public function __invoke(HashToNumberRequest $request): JsonResponse
    {

        $input = $request->input('input');
        $hash = crc32($input);
        $normalizedHash = $this->normalizeHash($hash);

        return response()->json(['number' => $normalizedHash]);
    }

    private function normalizeHash($hash): int
    {
        $range = self::MAX - self::MIN;
        return abs($hash) % $range + self::MIN;
    }
}
