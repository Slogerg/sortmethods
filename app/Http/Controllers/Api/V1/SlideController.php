<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        return response()->json("Slide index");
    }

    public function calcResult(Request $request)
    {
        dd($request->array);
    }
}
