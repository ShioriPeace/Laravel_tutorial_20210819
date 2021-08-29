<!-- layoutsのなかのhelloapp親レイアウトとして継承する -->
@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>
    <p>必要なだけ、記述できます</p>

    @component('components.message')
        @slot('msg_title')
        CAUTION!!!
        @endslot

        @slot('msg_content')
        これはメッセージからの表示です
        @endslot
    @endcomponent
@endsection

@section('footer')

copyright 2020 tuyano.
@endsection
