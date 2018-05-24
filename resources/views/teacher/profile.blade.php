@php
    $active = 'profile';
@endphp
@extends('layouts.app')
@section('content')
<div class="row"> 
    @include('partials.teacher-sidebar')
   
    <div class="col-8">
        <div class="tab-pane" id="list-myprofile" role="tabpanel">
            <br>
            <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
                    <div class="row">
                      
                        <div class="col-md-2">
                                <img src="{{$user->picture == null? '/img/test-img.png': $user->picture}}" title="{{$user->picture == null? 'Upload an Image' :$user->name}}" class="img-fluid prof-image" alt="{{$user->name}}'s profile photo">
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-9">
                            <h4 style="color:#204366; font-size: 30px">{{strtoupper($user->name) }}</h4>
                            <p style="color:#204366"><i class="fas fa-map-marker-alt"></i> {{$user->location == null? 'No location added': $user->location}}</p>
                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#editUser"><i class="fas fa-pencil-alt"></i>  Edit profile</button>

                        </div>
                    
                    </div>
                          <br>  <hr>
                   
                    <div class="col-md-12">
                        <h4 style="color:#204366; font-size: 30px">ABOUT ME</h4><br>
                        <div class= "exp-box">{{$user->teacher->about == null? 'Tell us more about your self': $user->teacher->about}}</div>
                        <br>
                        <hr>
                        <br>
                        <div style="color:#204366; font-size: 30px">Qualification - {{$user->teacher->qualification==null? 'Please add a qualification': $user->teacher->qualification }}</div>
                        <br><br>
                        <div style="color:#204366; font-size: 30px">Skills</div><br>
                        <div class="list-inline-item">Organization</div>
                        <div class="list-inline-item" style="float:right">Communication</div><br>
                        <div class="list-inline-item">Leadership</div>
                        <div class="list-inline-item" style="float:right">Innovation</div>
                        <div><i class="fas fa-plus-circle plus"></i></div>
                    </div>
                </div>
                </div>               
            </div>
        </div>
    </div>
     @include('partials.edit-user-modal')
    @endsection