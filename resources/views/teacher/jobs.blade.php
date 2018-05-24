@php
    $active = 'jobs';
@endphp
@extends('layouts.app')
@section('content')
<div class="row"> 
    @include('partials.teacher-sidebar')
    <div class="col-8">
               <div class="tab-pane fade show active" id="list-job">
                <br>
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-10">
                <h2>Akpor's JAMB Lessons</h2>
                <h4><i class="fas fa-comment"></i>   Reviews</h4>
                <p class= "text-box doe">John  Doe <br> "He's an awesome tutor. He tries to explain everything to a point that is 
                understandable to everyone"</p>
                <p class= " text-box doe">John  Doe <br> "He's an awesome tutor. He tries to explain everything to a point that is 
                    understandable to everyone"</p>
                <p class= " text-box doe">John  Doe <br> "He's an awesome tutor. He tries to explain everything to a point that is 
                        understandable to everyone"</p>
                <i class="fas fa-star star"> Rating</i>
                <i class="fas fa-star honor"></i>
                <i class="fas fa-star honor"></i>
                <i class="fas fa-star honor"></i>
                <i class="fas fa-star honor"></i>
                <i class="fas fa-star ashstar"></i>
                <br><br><br><br><br><br><br><br>
                <h2>Akpor's JAMB Lessons</h2>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection