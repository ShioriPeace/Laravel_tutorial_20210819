<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'なまえを入れてね！',
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request ->msg;

        $data = [
            'msg' => 'こんにちは！' . $msg . 'さん！',
        ];
        return view('hello.index', $data);
    }
}
