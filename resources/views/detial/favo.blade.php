{{-- お気に入り --}}
@extends('layouts.detial')
@section('contents')
<h3>ほしい物リスト</h3>

    <table>
        <tr>
            <th>名前</th>
            <th>欲しいもの</th>
            <th>書いた日にち</th>
            <th><a href="{{route('create')}}" alt="作成">作成</a></th>
          </tr>
        </thead>
        <tbody>  
        @foreach ($favo as $fav)         
          <tr>
            <td><a href="{{route('upp')}}/{{$fav->id}}">{{$fav->name}}</a></td>
            <td>{{$fav->text}}</td>
            <td>{{$fav->date}}</td>
            <td><a href="{{route('remove')}}/{{$fav->id}}"onclick='return confirm("本当に削除しますか？")'>削除</a></td>
          </tr>
          @endforeach
        </tbody>
        
    </table>

@endsection
