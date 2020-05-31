<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $array = [ 'one', 'two', 'three', 'four', 'five' ];
        return view('hello.index', ['array' => $array]);
    }

    // public function post(Request $request)
    // {
    //     return view('hello.index', ['msg' => $request->msg]);
    // }
}
