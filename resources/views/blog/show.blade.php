@extends('layouts.app')
  <style>
      a{
          color:green;
      }
      .btn-success{
          float: right;
      }
      .rounded-circle{
          width: 75px;
          height: 75px;
      }
  </style>
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
            <h1>{{App\Comment::count()}} Comments</h1>
            <div class="row">
                @foreach($post->comments as $comment)
                <div class="col-md-10">
                    <div class="col-md-2">
                        <img src="{{asset('uploads/speaker.png')}}" class="rounded-circle" alt="pic">
                    </div>
                    <div class="col-md-8">
                        <p><em><strong>{{auth()->user()->name}}</strong> ON MAY 31, 2017 AT 4:55 PM</em></p>
                        <p>{{$comment->body}}</p>
                        <div id="myDiv" style="display:none">
                        @isset($comment->reply)
                            @foreach($comment->reply as $reply)
                                <p>{{$reply->body}}</p>
                            @endforeach
                        @endisset

                            <h1>Reply</h1>
                            <form action="comment/reply/{{$comment->id}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <textarea id="" cols="20" rows="5" name="body" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                           </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success" onClick="myFunction()">Reply</button>
                </div>
                @endforeach
                <hr>
            </div>
        </div>
    </div>


        <div class="row">
            <div class="col-md-6">
                <div class="comment">
                    <h1>Submit a comment</h1>
                    @include('partials.errors')
                        <p><a href="">Logged in as author</a> <a href="">Logged out?</a>  </p>
                    <form action="comment/{{$post->id}}" method="POST">
                    @csrf()
                    <div class="form-group">
                        <textarea id="" cols="20" rows="5" name="body" class="form-control"></textarea>
                    </div>
                        <button type="submit" class="btn btn-success btn-sub">Submit comment</button>
                    </form>
                </div>
            </div>
        </div>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myDiv");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
@endsection