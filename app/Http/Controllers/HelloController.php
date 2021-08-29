<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'山田たろう', 'mail'=>'taro@yamada.com'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@tanaka.com'],
            ['name'=>'鈴木さちこ', 'mail'=>'sachico@suzuki.com']
        ];
        return view('hello.index', ['data'=>$data]);
    }
}
