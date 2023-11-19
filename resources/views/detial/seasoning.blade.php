@extends('layouts.detial')
@section('contents')
<h3>調味料管理</h3>

<table>
    <tr>
        <th>商品</th>
        <th>時間</th>
        <th><a href="{{route('seasoningadd')}}">新規作成</a></th>
    </tr>
    @foreach($seasonings as $seasoning)
    <tr>
        <td>{{$seasoning->name}}</td>
        <td>{{$seasoning->date}}</td>
        <td><a href="{{route('seasoningdelete')}}/{{$seasoning->id}}" onclick='return confirm("本当に削除しますか？")'>削除</a></td>
    </tr>
    @endforeach
</table>
@endsection