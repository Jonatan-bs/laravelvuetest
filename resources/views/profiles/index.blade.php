@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-15/e35/37986836_244518309720525_2094827894411886592_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&_nc_cat=109&_nc_ohc=6VewJwPnBz0AX8YRgMJ&oh=36b70a5fe3b20fef9586902fe971b838&oe=5F7F4457" style="width:100%" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1> {{ $user->username }} </h1>
                    <a href="{{ url('post/create') }}">Add new post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>22</strong> posts</div>
                    <div class="pr-5"><strong>3k</strong> followers</div>
                    <div class="pr-5"><strong>33</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url}}</a></div>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 p-2">
                <div class="square-100" style="background: url('{{url('/storage/' . $post->image)}} '"></div>
            </div>
        @endforeach
        
       
    </div>
</div>
@endsection
