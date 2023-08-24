<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request, $color)
    {
        dump($request->all());
        dump($request->size);

        //$request->size yra queris
        return '<h1 style="color:' . $color . '; font-size:' . $request->size . 'px;">hello1231232123</h1>';
    }

    public function helloBlade(Request $request)
    {
        return view('go.hello', ['color' => $request->color]);
    }
}
