<!-- layoutsのなかのhelloapp親レイアウトとして継承する -->
@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{ $msg }}</p>
    @if(count($errors) > 0)
    <p>入力に問題あり！！再入力してください</p>
    @endif
    <form action="/hello" method="POST">
        <table>
            @csrf
            @error('name')
                <th>ERROR</th>
                <td>{{ $message }}</td>
            @enderror
            <tr><th>name: </th><td><input type="text" name="name" value="{{ old('name') }}"></td></tr>

            @error('mail')
                <th>ERROR</th>
                <td>{{ $message }}</td>
            @enderror
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>

            @error('age')
                <th>ERROR</th>
                <td>{{ $message }}</td>
            @enderror
            <tr><th>age: </th><td><input type="text" name="age" value="{{ old('age') }}"></td></tr>

            <tr><th></th><td><input type="submit" name="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')

copyright 2020 tuyano.
@endsection
