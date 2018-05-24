@php
  if (!isset($active)){$active = 'tutor';}
@endphp
<div class="col-2 nav-col">
  <div class="list-group mb-5 text-center" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action {{$active=='find a tutor'? 'active': ''}}" id="list-job-list" href="/tutors"></i> Find a tutor</a>
    <a class="list-group-item list-group-item-action {{$active=='messages'? 'active': ''}}" id="list-chats-list" href="/messages"><i class="fas fa-comments"></i> Chats</a>
    
    <a class="list-group-item list-group-item-action {{$active=='notifications'? 'active': ''}}" id="list-notifications-list" href="/notifications"><i class="fas fa-bell"></i> Notifications</a>
    <a class="list-group-item list-group-item-action {{$active=='history'? 'active': ''}}" id="list-mysubjects-list" href="/{{Auth::user()->username}}/History" ><i class="fas fa-book"></i>History</a>
    <a class="list-group-item list-group-item-action {{$active=='profile'? 'active': ''}}" id="list-myprofile-list"  href="/{{Auth::user()->username}}"><i class="fas fa-user"></i> My Profile</a>
  </div>
  <div class="list-group mt-auto text-center" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action client" id="list-client-list" data-toggle="list" href="#list-client" role="tab" aria-controls="job">BECOME A CLIENT</a>
  </div>
</div>
        