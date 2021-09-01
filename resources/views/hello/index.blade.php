<!-- layoutsのなかのhelloapp親レイアウトとして継承する -->
@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツなのですが.....</p>
    <p>これは、なんと！<middleware>google.com</middleware>へのリンクです！！！</p>
    <p>そして、こっちは、<middleware>yahoo.co.jp</middleware>へのリンクだったのです！！！</p>
@endsection

@section('footer')

copyright 2020 tuyano.
@endsection
