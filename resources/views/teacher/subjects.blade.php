@php
    $active = 'subjects';
@endphp
@extends('layouts.app')
@section('content')
<div class="row"> 
    @include('partials.teacher-sidebar')
    <div class="col-8">
        <div class="tab-pane" id="list-mysubjects" role="tabpanel">
            <br><br>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-8">
                            @include('./partials.errors')
                            @foreach($subjects as $subject)
                            <p class= "text-box form-control">{{$subject->subject}}</p>
                            @endforeach
                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#addSubject"><i class="fas fa-pencil-alt"></i>  Edit Subject</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="/subjects" method="post">
  @csrf
<div class="modal fade" id="addSubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
        <button type="button" style="outline: none;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="user" value="">
          <div class="form-group">
            <label for="name">Subject:</label>
            <input class="form-control" id="name" type="text" name="subject" value="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>




@endsection