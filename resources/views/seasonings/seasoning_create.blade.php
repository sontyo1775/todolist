@extends('layouts.detial')
@section('contents')
<form method="post" action="{{route('seasoningcreate')}}">
    <div class="uk-flex uk-flex-center uk-padding-small">
        <div><a href="{{route('seasoning')}}"><img id="homebtn" src="../image/back.jpg"></a></div>
        <h3>商品新規</h3>
        <div><a href="{{route('index')}}"><img id="homebtn" src="../image/home.jpg"></a></div>
    </div>
    <div>
        @csrf
        <div><p>名前: <input class="uk-input" type="text" placeholder="マヨネーズ" name="name"></p></div>
        <div><p>月日: <input type="date" name="date" value="@php date_default_timezone_set('Asia/Tokyo');  print date('Y-m-d'); @endphp"></p></div>
        <div><input type="submit" class="button" value="検索" /></div>
    </div>
</form>
@endsection