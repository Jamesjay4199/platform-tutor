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
                            <p class= "text-box form-control">MATHEMATICS</p>
                            <p class= "text-box form-control">ENGLISH LANGUAGE</p>
                            <p class= "text-box form-control">PHYSICS</p>
                            <p class= "text-box form-control">CHEMISTRY</p>
                            <p class= "text-box form-control">BIOLOGY</p>     
                        </div>                  
                    </div>  
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection