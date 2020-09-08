@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8"> 
            <div class="square-100" style="background:url({{url( 'storage/' . $post->image )}})"></div>
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center mb-3">
                <div style="width:55px;"> 
                    <div 
                        class="square-100 w-100 rounded-circle"
                        style="background:url('{{ url($post->user->profile->profileImage() ) }}')"
                    >
                        
                    </div>
                </div>
                <div>
                    <a href="{{ url('/profiles/'.$post->user->id)}}">
                        <span class="text-dark ml-3 font-weight-bold">{{ $post->user->username}}</span>
                    </a>
                    <a href="#" class="pl-3 font-weight-bold">Follow</a>
                </div>
            </div>
            <hr>
            <p>
                <a href="{{ url('/profiles/'.$post->user->id)}}">
                    <span class="font-weight-bold text-dark ">{{ $post->user->username}} </span>
                </a>
                {{ $post->caption}}
            </p>
        </div>
    </div>
</div>
@endsection
