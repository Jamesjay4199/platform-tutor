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
                            @forelse ($user_subjects as $subject)
                               {{$subject}}
                            @empty
                                <p class= "text-box form-control">No subject selected</p>
                            @endforelse
                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#addSubject"><i class="fas fa-pencil-alt"></i> Add Subject</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="/subjects" method="POST">
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
          <label for="exampleFormControlSelect1">Subject</label>
          <select name="subject_id" class="form-control" id="exampleFormControlSelect1">
          @foreach($available_subjects as $available_subject)
            <option value="{{$available_subject->id}}">{{$available_subject->subject}}</option>
          @endforeach
          </select>
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