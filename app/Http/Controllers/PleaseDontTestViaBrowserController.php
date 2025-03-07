<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PleaseDontTestViaBrowserController extends Controller
{
    public function please()
    {
        return response()->json([
            'message' => 'Te amo tanto, queria você pra mim :/',
        ], 200, [],JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
    }
}
