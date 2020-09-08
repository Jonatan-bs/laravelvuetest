@extends('layouts.app')

@section('content')

<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3"> 
            <a href="{{url('profiles/' . $post->user->id)}}">
            <div class="square-100" style="background:url({{url( 'storage/' . $post->image )}})"></div>
            </a>
        </div>
    </div>

    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
       
            <p>
                <a href="{{ url('/profiles/'.$post->user->id)}}">
                    <span class="font-weight-bold text-dark ">{{ $post->user->username}} </span>
                </a>
                {{ $post->caption}}
            </p>
        </div>
    </div>
    @endforeach
</div>
@endsection
