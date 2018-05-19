@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-2 nav-col">
          <div class="list-group mb-5 text-center" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-job-list" data-toggle="list" href="#list-job" role="tab" aria-controls="job"><i class="fas fa-briefcase"></i> Job</a>
            <a class="list-group-item list-group-item-action" id="list-chats-list" data-toggle="list" href="#list-chats" role="tab" aria-controls="chats"><i class="fas fa-comments"></i> Chats</a>
            <a class="list-group-item list-group-item-action" id="list-payments-list" data-toggle="list" href="#list-payments" role="tab" aria-controls="payments"><i class="fas fa-dollar-sign"></i> Payments</a>
            <a class="list-group-item list-group-item-action" id="list-notifications-list" data-toggle="list" href="#list-notifications" role="tab" aria-controls="notifications"><i class="fas fa-bell"></i> Notifications</a>
            <a class="list-group-item list-group-item-action" id="list-mysubjects-list" data-toggle="list" href="#list-mysubjects" role="tab" aria-controls="mysubjects"><i class="fas fa-book"></i> My Subjects</a>
            <a class="list-group-item list-group-item-action" id="list-myprofile-list" data-toggle="list" href="#list-myprofile" role="tab" aria-controls="myprofile"><i class="fas fa-user"></i> My Profile</a>
          </div>
          <div class="list-group mt-auto text-center" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action client" id="list-client-list" data-toggle="list" href="#list-client" role="tab" aria-controls="job">BECOME A CLIENT</a>
          </div>
        </div>
        <!-- End of List group -->
        <!-- Tab Content -->
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
              <!-- Job Page -->
             
            <div class="tab-pane fade show active" id="list-job" role="tabpanel" aria-labelledby="list-job-list">
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
            
            <!-- End of Job Page -->
            <!-- Chats Begins -->
            <div class="tab-pane fade" id="list-chats" role="tabpanel" aria-labelledby="list-chats-list">
                <br><br>
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
            <!-- End of Chat page -->
                <!-- Payment Page Begins-->
            <div class="tab-pane fade" id="list-payments" role="tabpanel" aria-labelledby="list-payments-list">
                <br><br>
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
            <!-- End of Payment Page -->
            <!-- Notifications Page begins -->
            <div class="tab-pane fade" id="list-notifications" role="tabpanel" aria-labelledby="list-notifications-list">
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
            <!-- End of Notifications page -->
                <!-- My Subjects Page Begins-->
            <div class="tab-pane fade" id="list-mysubjects" role="tabpanel" aria-labelledby="list-mysubjects-list">
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
            <!-- End of My Subjects Page-->
            <!-- My Profile Page begins -->
            <div class="tab-pane fade" id="list-myprofile" role="tabpanel" aria-labelledby="list-myprofile-list">
                <br>
                <div class="row">
                            <div class="col-md-2">
        
                            </div>
                            <div class="col-md-10">
                                    <div class="row">
                                      
                                        <div class="col-md-2">
                                                <img src="../img/smile.jpg" class="img-fluid prof-image" alt="Anahi's profile photo">
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-9">
                                            <h4 style="color:#204366; font-size: 30px">ANAHI JACOBSON</h4>
                                            <p style="color:#204366"><i class="fas fa-map-marker-alt"></i> Bayonne, NJ, USA</p>
                                            <a><button style="color:#204366"><i class="fas fa-pencil-alt"></i>  edit profile</button></a>
                
                                        </div>
                                    
                                    </div>
                                          <br>  <hr>
                                   
                                    <div class="col-md-12">
                                        <h4 style="color:#204366; font-size: 30px">ABOUT ME</h4><br>
                                        <div class= "exp-box">Hi, I'm a User Interface Designer with 1-year experience working with startups</div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div style="color:#204366; font-size: 30px">Qualification - B.Sc Computer Science (In View)</div>
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
            <!-- End of My Profile page -->
          </div>
        </div>
      </div>
@endsection