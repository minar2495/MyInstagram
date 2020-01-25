@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-bom1-1.cdninstagram.com/v/t51.2885-19/s150x150/39940095_326955094516623_7736075319525769216_n.jpg?_nc_ht=scontent-bom1-1.cdninstagram.com&_nc_ohc=pi70DWeXH_UAX-xvbn_&oh=2dfe624df6eef673c7087f5313833ac4&oe=5EDB7F88" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-item-baseline">
            <h1>{{$user->username}}</h1>
            <a href="#">Add New Post</a>
        </div>
            <div class="d-flex">
                <div class="pr-5"><strong>150</strong> posts</div>
                <div class="pr-5"><strong>155</strong> followers</div>
                <div class="pr-5"><strong>196</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4"><img src="/storage/{{$post->image}}" class="w-100" alt="image"></div>
        @endforeach
        {{-- <div class="col-4"><img src="/svg/myinstagramlogo.svg" class="w-100" alt=""></div>
        <div class="col-4"><img src="/svg/myinstagramlogo.svg" class="w-100" alt=""></div>
        <div class="col-4"><img src="/svg/myinstagramlogo.svg" class="w-100" alt=""></div> --}}
    </div>
</div>
@endsection
