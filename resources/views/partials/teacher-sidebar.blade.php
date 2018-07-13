@php
  if (!isset($active)){$active = 'job';}
@endphp
<div class="col-2 nav-col">
  <div class="list-group mb-5 text-center" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action {{$active=='jobs'? 'active': ''}}" id="list-job-list" href="/jobs"></i> Job</a>
    <a class="list-group-item list-group-item-action {{$active=='messages'? 'active': ''}}" id="list-chats-list" href="/messages"><i class="fas fa-comments"></i> Chats</a>
    <a class="list-group-item list-group-item-action {{$active=='payments'? 'active': ''}}" id="list-payments-list"  href="/payments"><i class="fas fa-dollar-sign"></i> Payments</a>
    <a class="list-group-item list-group-item-action {{$active=='notifications'? 'active': ''}}" id="list-notifications-list" href="/notifications"><i class="fas fa-bell"></i> Notifications</a>
    <a class="list-group-item list-group-item-action {{$active=='subjects'? 'active': ''}}" id="list-mysubjects-list" href="{{url('subjects')}}" ><i class="fas fa-book"></i> My Subjects</a>
    <a class="list-group-item list-group-item-action {{$active=='profile'? 'active': ''}}" id="list-myprofile-list"  href="/{{Auth::user()->username}}"><i class="fas fa-user"></i> My Profile</a>
  </div>
  <div class="list-group mt-auto text-center" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action client" id="list-client-list" data-toggle="list" href="#list-client" role="tab" aria-controls="job">BECOME A CLIENT</a>e
  </div>
</div>
        