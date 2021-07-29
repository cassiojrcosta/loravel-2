<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contato()
    {
        return view('contato');
    }

    public function calculadora($op)
    {
        if ($op == 'soma') {
            return view('soma');
        }
        return view('sub');
    }
    
    public function soma(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $result = $num1 + $num2;

        return view(
            'resultado', 
            compact('result')
        );
    }

    public function sub(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $result = $num1 - $num2;

        return view(
            'resultado', 
            compact('result')
        );
    }

    public function div(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $result = $num1 / $num2;

        return view(
            'resultado', 
            compact('result')
        );
    }

    public function mult(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $result = $num1 * $num2;

        return view(
            'resultado', 
            compact('result')
        );
    }

}
