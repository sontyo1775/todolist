@extends('layouts.detial')

@section('contents')
<form method="post" action="{{route('remove')}}">
    <div>
        @csrf
        <input type="hidden" name="id" value="{{$items->id}}">
        {{-- <div><p>名前: <input class="uk-input" type="text" value="{{$items->name}}" name="name"></p></div>
        <div><p>文字: <textarea class="uk-textarea" name="text" value="{{$items->text}}"></textarea></p></div> --}}
        <input type="submit" value="削除" onclick='return confirm("本当に削除しますか？")'>
    </div>
</form>
@endsection