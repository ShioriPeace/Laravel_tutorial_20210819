<!-- layoutsのなかのhelloapp親レイアウトとして継承する -->
@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>
    <table>
        @foreach($data as $item)
        <tr><th>{{ $item['name'] }}</th><td>{{ $item['mail'] }}</td></tr>
        @endforeach
    </table>
@endsection

@section('footer')

copyright 2020 tuyano.
@endsection
