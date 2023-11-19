{{-- メモ削除 --}}
@extends('layouts.detial')
@section('contents')
<form method="post" action="{{route('memo.delete')}}">
    <h3>メモ削除</h3>
    <div>
        @csrf
        <div><p>タイトル: <input class="uk-input" type="text" placeholder="タイトル" name="id"></p></div>
        <input type="submit" value="削除" onclick='return confirm("本当に削除しますか？")'>
    </div>
</form>
@endsection