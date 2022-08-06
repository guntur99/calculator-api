<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function operations()
    {
        $symbol = request()->symbol;
        $res    = 0;
        switch ($symbol) {
            case '+':
                $res = request()->number1 + request()->number2;
                break;
            case '-':
                $res = request()->number1 - request()->number2;
                break;
            case '/':
                $res = request()->number1 / request()->number2;
                break;
            case '^':
                $res = request()->number1 xor request()->number2;
                break;
            case 'SWAP':
                $res = ['number1' => request()->number2, 'number2' => request()->number1];
                break;
            case '*':
                $res = request()->number1 * request()->number2;
                break;
        }

        return response()->json(['res' => $res], 200);
    }
}
