@extends('layouts.detial')
@section('contents')
<h3>メモ帳</h3>
<div>
    <table>
        <thead>
            <tr>
                <th>名前</th>
                <th><a href="{{route('memo.create')}}" alt="新規作成">新規作成</a></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($memoitems as $memoitem)
            <tr>
                <td>{{$memoitem->name}}</td>
                <td><a href="{{route('memofaile')}}/{{$memoitem->id}}" alt="メモファイル">{{$memoitem->title}}</a></td>
                <td><a href="{{route('memo.upp')}}/{{$memoitem->id}}" alt="編集">編集</a></td>
                <td><a href="{{route('memo.delete')}}/{{$memoitem->id}}" alt="削除" onclick='return confirm("本当に削除しますか？")''>削除</a></td>
    @endforeach
            </tr>
        </tbody>
    </table>
</div>

@endsection