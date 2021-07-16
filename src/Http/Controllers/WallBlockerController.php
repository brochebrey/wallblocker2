<?php

namespace Piseth\WallBlocker\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Piseth\WallBlocker\Models\WallBlocker;
use App\Http\Controllers\Controller;

class WallBlockerController extends Controller
{
    public function checkWBKey(Request $request)
    {
        if (WallBlocker::where('secret_key', $request->sck)->exists()){
            return "true";
        }else{
            return "false";
        }
    }
}
