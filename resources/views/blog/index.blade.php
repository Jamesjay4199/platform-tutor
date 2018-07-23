@extends('layouts.app')

@section('content')
<div class="container">

@foreach($posts as $post)
    <div class="row">
        <div class="col-md-6 mt-5">
            <h1><a href="blog/{{$post->id}}">{{$post->title}}</a></h1>
             <small><span class="float-right">{{$post->created_at->diffForHumans()}} by {{Auth::user()->name}}</span></small>
            <small>{{$post->description}}</small>
            <div class="content">{{$post->body}}</div>
        </div>
    </div>
@endforeach
</div>


@endsection