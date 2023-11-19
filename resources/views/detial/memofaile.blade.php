@extends('layouts.detial')
@section('contents')
<div class="uk-flex uk-flex-center uk-padding-small">
    <div><a href="{{route('memo')}}"><img id="homebtn" src="../image/back.jpg" alt="戻る"></a></div>
    <h3>{{$memofailes->title}}</h3>
    <div><a href="{{route('index')}}"><img id="homebtn"" src="../image/home.jpg" alt="ホーム"></a></div>
</div>
<div>
    <table>
        <thead>
            <tr>
                <th>{{$memofailes->title}}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> {!! nl2br(e($memofailes->text)) !!} </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection