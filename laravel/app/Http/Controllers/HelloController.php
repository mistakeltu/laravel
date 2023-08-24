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

        $people = [
            ['name' => 'Forest', 'age' => 22],
            ['name' => 'Bob', 'age' => 33],
            ['name' => 'Alice', 'age' => 44],
        ];

        return view('go.hello', [
            'color' => $request->color,
            'font' => $request->font,
            'people' => $people,
        ]);
    }

    public function byeByeBlade()
    {
        return view('go.bye');
    }
}
