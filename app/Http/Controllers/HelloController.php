<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people2')->get();
        return view('hello.index', ['items' => $items]);
    }

    public function show(Request $request)
    {
        $min = $request->min;
        $max = $request->max;

        $items = DB::table('people2')
        ->whereRaw('age >= ? and age <= ?',
        [$min, $max])->get();
        return view('hello.show', ['items' => $items]);
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

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people2 (name, mail, age) values (:name, :mail, :age)', $param);

        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        $param= ['id' => $request->id];
        $item = DB::select('select * from people2 where id = :id', $param);

        return view('hello.edit', ['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('update people2 set name =:name, mail = :mail, age = :age where id = :id', $param);

        return redirect('/hello');
    }

    public function del(Request $request)
    {
        $param= ['id' => $request->id];
        $item = DB::select('select * from people2 where id = :id', $param);

        return view('hello.del', ['form' => $item[0]]);
    }

    public function remove(Request $request)
    {
        $param= ['id' => $request->id];
        DB::delete('delete from people2 where id = :id', $param);

        return redirect('/hello');
    }
}
