@php
    $active = 'messages';
@endphp
@extends('layouts.app')
@section('content')
<div class="row">
    @include('partials.teacher-sidebar')    
    <!-- End of Job Page -->
    <!-- Chats Begins -->
    <div class="col-8"> 
    <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
        <div class="row">
                <div class="col-md-6">
                    <div class="text">
                        <p>John Doe</p>
                        <hr>
                        <p>John Doe</p>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6">
                    <br>
                    <div class="col-md-12"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fas fa-times"></i>
                            <img src="../img/smile.jpg" class="img-fluid chat-img">
                        </div>
                        <div class="col-md-10">
                                <div class= "recieve">
                                    <div class= "message-body sent">Hello</div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 rep-form">
                            <div class= "recieved">
                                <div class="message-body recieved">Hello<br>How may I help you?</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="../img/smile.jpg" class="img-fluid chat-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
@endsection
    <!-- End of Chat page -->