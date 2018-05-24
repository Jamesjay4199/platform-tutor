@php
    $active = 'notifications';
@endphp
@extends('layouts.app')
@section('content')
<div class="row"> 
    @include('partials.teacher-sidebar')
    <div class="col-8">
        <div class="tab-pane" id="list-notifications">
                <br><br>
                <div class="row">
                        <div class="col-md-2">
    
                        </div>
                        <div class="col-md-10">
                <div class="row">
                        <div class="col-md-7">
                            <div class="text">
                                <p>You just received a payment</p>
                                <hr>
                                <p>Someone wants to hire you</p>
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <div class="col-md-12"></div>
                            <div class="row">
                                <div class="col-md-10">
                                   You just recieved a payment 
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </div>                  

        </div>
    </div>
</div>
@endsection