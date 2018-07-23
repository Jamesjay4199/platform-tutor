@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-6 mt-5">

            <h1>{{$post->title}}</h1>
            <small class="mt-5">{{$post->description}}<span class="float-right">{{$post->created_at->diffForHumans()}} by {{Auth::user()->name}}</span></small>
                <div class="center float-center">
                    <img src="{{$post->image}}" class="img-fluid">
                </div>
            <div class="content mt-5">{{$post->body}}</div>
        </div>
    </div>
            
            <div class="row">
            
                    <div class="col-md-6">
    <hr>
                    <div class="">
                        <a href="/">
                            <img src="{{asset('/uploads/speaker.png')}}" class="logo mr-3" height="50" width="50">
                        </a>
                        <span class="brand-title" style="font-size:20px">
                        Ekpono
                            <span class="float-right"> 2 hours</span>
                            <div class="col-md-3">heu</div>
                        
                    </div>
                        <h2>Comment</h2>
                        <form method="POST" action="/create" enctype="multipart/form-data">
                        @csrf()
                            <div class="form-group">

                                <lable for="name">Name</lable>

                                <input type="text" name="name" class="form-control">

                            </div>

                            <div class="form-group">
                            <lable for="comment">Comment</lable>

                                <textarea name="body" class="form-control" placeholder="Comment"></textarea>

                            </div>

                            <div class="form-group mt-4">

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </form>
                    </div>
            </div>
            <figure>
            <div class="row">
            <div class="col-md-6">
            <figure>
  <img src="https://static.pexels.com/photos/126407/pexels-photo-126407.jpeg" class="img-fluid rounded"/>
    <figurecaption>
        My name is katey and I am only 2 and a half months old.
    </figurecaption>
    </figure>
    <figure>
    <img src="https://static.pexels.com/photos/416160/pexels-photo-416160.jpeg" class="img-fluid rounded"/>
    <figurecaption>
        My name is jando and I am only 3 months old. Clearly, I love to have fun!
    </figurecaption>
    </figure>
</div>
</div>
    </div>

</div>

@endsection