@extends('layouts.detial')

@section('contents')
<form method="post" action="{{route('seasoningdelete')}}">
    <div>
        @csrf
        <input type="hidden" name="id" value="{{$items->id}}">
        <input type="submit" value="削除" onclick='return confirm("本当に削除しますか？")'>
    </div>
</form>
@endsection