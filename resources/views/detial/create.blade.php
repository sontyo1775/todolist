@extends('layouts.detial')
@section('contents')
<form method="post" action="{{route('create')}}">
    <div class="uk-flex uk-flex-center uk-padding-small">
        <div><a href="{{route('favo')}}"><img id="homebtn" src="../image/back.jpg" alt="戻る"></a></div>
        <h3>ほしい物新規</h3>
        <div><a href="{{route('index')}}"><img id="homebtn" src="../image/home.jpg" alt="ホーム"></a></div>
    </div>
    <div>
        @csrf
        <div><p>名前: <input class="uk-input" type="text" placeholder="山田 太郎" name="name"></p></div>
        <div><p>文字: <textarea class="uk-textarea" name="text"></textarea></p></div>
        <div><p>月日: <input type="date" name="date" value="@php date_default_timezone_set('Asia/Tokyo'); print date('Y-m-d'); @endphp"></p></div>
        <div><input type="submit" class="button" value="検索" /></div>
    </div>
</form>
@endsection