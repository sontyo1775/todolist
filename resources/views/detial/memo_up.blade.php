@extends('layouts.detial')
@section('contents')
{{-- メモ更新 --}}
<form method="post" action="{{route('memo.uppdate')}}">
    <div class="uk-flex uk-flex-center uk-padding-small">
        <div class="uk-flex uk-flex-center uk-padding-small">
            <div><a href="{{route('memo')}}"><img id="homebtn" src="../image/back.jpg" alt="戻る"></a></div>
            <h3>{{$memoup->title}}</h3>
            <div><a href="{{route('index')}}"><img id="homebtn"" src="../image/home.jpg" alt="ホーム"></a></div>
        </div>
    </div>
    <div>
        @csrf
        <input type="hidden" name="id" value="{{$memoup->id}}">
        <div><p>タイトル: <input class="uk-input" type="title" placeholder="タイトル" name="title" value="{{$memoup->title}}"></p></div>
        <div><p>名前: <input class="uk-input" type="text" placeholder="山田 太郎" name="name" value="{{$memoup->name}}"></p></div>
        <div><p>文字: <textarea class="uk-textarea" name="text" value="{{$memoup->text}}"></textarea></p></div>
        <div><input type="submit" class="button" value="検索" /></div>
    </div>
</form>
@endsection