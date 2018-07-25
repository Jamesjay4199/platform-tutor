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
            <section id="home">
                <div class="container">
                    <h1>2 Comments</h1>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{asset('uploads/speaker.png')}}" class="rounded-circle" alt="pic">
                                </div>
                                <div class="col-md-10">
                                    <p><em><strong>AUTHOR</strong> ON MAY 31, 2017 AT 4:55 PM</em></p>

                                    <p>This is a comment</p>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-2"> 
                            <button type="submit" class="btn btn-success">Reply</button>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-2">
                                        <img src="{{asset('uploads/speaker.png')}}" class="m-2 rounded-circle" alt="pic">
                                </div>
                                    <div class="col-md-10">
                                        <p><em><strong>AUTHOR</strong> ON MAY 31, 2017 AT 4:55 PM</em></p>
                                        <p>This is a reply</p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success ">Reply</button>

                        </div>
                    </div>
                    <div class="comment">
                        <h1>Submit a comment</h1>
                            <p><a href="">Logged in as author</a> <a href="">Logged out?</a>  </p>
                            <textarea name="" id="" cols="20" rows="5" class="form-control">

                            </textarea><br>

                            <button type="submit" class="btn btn-success btn-sub">Submit comment</button>
                    </div>
                    </div>
            </section>
        </div>
    </div>

<button onclick="myFunction()">Click Me</button>

<div id="myDIV">
       <p></p>Submit comment</p>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.color === "blue") {
        x.style.color = "black";
    } else {
        x.style.color = "blue";
    }
}
</script>
</div>

@endsection