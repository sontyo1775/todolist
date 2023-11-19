@extends('layouts.layouts')

@section('contents')
    <div id="card-container" class="uk-flex uk-flex-wrap uk-flex-around@m">
        <div id="card-item" class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-medium">
            <div class="uk-card-media-top">
                <a href="{{route('favo')}}">
                    <img src="../image/bag.jpg" width="400" height="300" alt="">
                    <h2 class="uk-card-title">ほしい物リスト</h2>
                </a>
            </div>
        </div>
        <div id="card-item" class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-medium">
            <div class="uk-card-media-top">
                <a href="{{route('memo')}}">
                    <img src="../image/memo2.jpg" width="400" height="300" alt="">
                    <h2 class="uk-card-title">メモ帳</h2>
                </a>
            </div>
        </div>
        <div id="card-item" class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-medium">
            <div class="uk-card-media-top">
                <a href="{{route('seasoning')}}">
                    <img src="../image/tyoumiryou.jpg" width="400" height="300" alt="">
                    <h2 class="uk-card-title">調味料管理</h2>
                </a>
            </div>
        </div>
    </div>
@endsection