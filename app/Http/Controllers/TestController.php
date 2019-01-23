<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = [
            'data' => [
                'ip' => $request->ip(),
                'message' => 'successfully fetch data'
            ]
        ];
        return response()->json($data);
    }
}
