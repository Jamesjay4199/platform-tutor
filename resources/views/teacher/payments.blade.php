@php
    $active = 'payments';
@endphp
@extends('layouts.app')
@section('content')
<div class="row">    <!-- Payment Page Begins-->
   @include('partials.teacher-sidebar')
    <div class="col-8">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-8">
                        <p class= "text-box form-control">Nathan's JAMB Lessons<i class="fas fa-check-circle"></i></p>
                        <p class= "text-box form-control">Ekong's JAMB Lessons<i class="fas fa-times-circle"></i></p>
                        <p class= "text-box form-control">Edidiong's JAMB Lessons<i class="fas fa-check-circle"></i></p>
                        <p class= "text-box form-control">Akan's JAMB Lessons<i class="fas fa-ellipsis-h"></i></p>
                        <p class= "text-box form-control">Biola's JAMB Lessons<i class="fas fa-check-circle"></i></p>     
                    </div>                  
                </div> 
            </div>
        </div> 
    </div> 
</div>
@endsection
            <!-- End of Payment Page -->