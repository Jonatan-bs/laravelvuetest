@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <div 
                class="square-100 w-100 rounded-circle"
                style="background:url('{{$user->profile->profileImage()}}')">
            </div>
        </div>
        <div class="col-9 pt-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <h3 > {{ $user->username }} </h3 >
                        <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="{{ url('posts/create') }}">Add New Post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                <a href="{{ url('profiles/' . $user->id . '/edit') }}">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                    <div class="pr-5"><strong>{{$user->following->count()}}</strong> following</div>
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
                <a href="{{ url('/posts/'.$post->id) }}">
                    <div class="square-100" style="background: url('{{url('/storage/' . $post->image)}} '"></div>
                </a>
            </div>
        @endforeach
        
       
    </div>
</div>
@endsection
