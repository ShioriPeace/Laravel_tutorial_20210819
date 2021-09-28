<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        if($request->hasCookie('msg'))
        {
            $msg = 'Cookie: ' . $request->cookie('msg');
        } else {
            $msg = '※Cookieはありません。';
        }

        return view('hello.index', ['msg' => $msg]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('hello.index', ['msg'=>'「' .$msg. '」をCookieに保存しました']);

        $response->cookie('msg', $msg, 100);
        return $response;
    }
}
