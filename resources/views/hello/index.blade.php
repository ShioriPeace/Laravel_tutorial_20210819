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
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/hello" method="POST">
        <table>
            @csrf
            <tr><th>name: </th><td><input type="text" name="name" value="{{ old('name') }}"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>
            <tr><th>age: </th><td><input type="text" name="age" value="{{ old('age') }}"></td></tr>
            <tr><th></th><td><input type="submit" name="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')

copyright 2020 tuyano.
@endsection
