@extends('layouts.detial')

@section('contents')
<form method="post" action="{{route('uppdate')}}">
    <div class="uk-flex uk-flex-center uk-padding-small">
        <div><a ref="{{route('favo')}}"><img id="homebtn" src="../image/back.jpg" alt="戻る"></a></div>
        <h3>ほしい物更新</h3>
        <div><a href="{{route('index')}}"><img id="homebtn" src="../image/home.jpg" alt="ホーム"></a></div>
    </div>
    <div>
        @csrf
        <input type="hidden" name="id" value="{{$items->id}}">
        <div><p>名前: <input class="uk-input" type="text" value="{{$items->name}}" name="name"></p></div>
        <div><p>文字: <textarea class="uk-textarea" name="text" value="{{$items->text}}"></textarea></p></div>
        <div><p>月日: <input type="date" name="date" value="{{$items->date}}"></p></div>
        <div><input type="submit" class="button" value="検索" /></div>

</form>
@endsection