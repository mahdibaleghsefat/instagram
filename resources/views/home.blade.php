@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img class="_6q-tv rounded-circle"
                     src="https://scontent-lhr3-1.cdninstagram.com/vp/607cc142e2866da47d021e6d136eac38/5D7AF85E/t51.2885-19/s150x150/57451441_806916656334155_6136785487412592640_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com">
            </div>
            <div class="col-9 pt-5">
                <div>
                    <h1>{{ $user->username }}</h1>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>644</strong> posts</div>
                    <div class="pr-5"><strong>30.3k</strong> followers</div>
                    <div class="pr-5"><strong>814</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div>
                    <a href="#">{{ $user->profile->url }}</a>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img class="w-100"
                     src="https://scontent-lhr3-1.cdninstagram.com/vp/174f04860c8d181bc0b5eb5188fa52f7/5D877523/t51.2885-15/e35/60243565_457601851680611_735898192946484359_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com">
            </div>
            <div class="col-4">
                <img class="w-100"
                     src="https://scontent-lhr3-1.cdninstagram.com/vp/174f04860c8d181bc0b5eb5188fa52f7/5D877523/t51.2885-15/e35/60243565_457601851680611_735898192946484359_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com">
            </div>
            <div class="col-4">
                <img class="w-100"
                     src="https://scontent-lhr3-1.cdninstagram.com/vp/174f04860c8d181bc0b5eb5188fa52f7/5D877523/t51.2885-15/e35/60243565_457601851680611_735898192946484359_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com">
            </div>
        </div>
    </div>
@endsection
