@extends('layouts.app')
@section('content')
	<div class="row">
    <div class="col-2">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
     <i style="font-size:20px" class="fa">&#xf0c0;</i> Find a tutor</a>
        <a class="list-group-item list-group-item-action" id="list-chat-list" data-toggle="list" href="#list-chat" role="tab" aria-controls="chat">
     <i class="fa fa-comments"></i>   Chat</a>
        <a class="list-group-item list-group-item-action" id="list-not-list" data-toggle="list" href="#list-not" role="tab" aria-controls="not">
     <i class="fa fa-bell fa-lg"></i>Notifications</a>
        <a class="list-group-item list-group-item-action" id="list-history-list" data-toggle="list" href="#list-history" role="tab" aria-controls="history">
     <i class="fa fa-history"></i>   History</a>
        <a class="list-group-item prof-a list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
    <i class="fa fa-user"></i>My Profile</a>
        <!-- <div class="list-group " id="list-tab" role="tablist"> -->
        <a class="list-group-item " style="background-color: white;" id="list-Become-list" data-toggle="list" href="list-Become" role="tab" aria-controls="Become"><p1><strong>BECOME A TEACHER</strong></p1></a>
        <a class="list-group-item "  data-toggle="list" href="list-Become" role="tab" aria-controls=""></a>
            
    </div>  
    </div>
<!-- End of side bar -->

<!-- body -->

    <div class="col-9">
        <br>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-home-list">
                <div class="form-row">
                    <div class="form-group col-md-5">
                      	<input type="text" class="form-control" id="search"placeholder"">
                    </div>
                    <div class="form-group col-md-5">
                      	<input type="text" class="form-control" id="search">
                    </div>
                
                	<button type="submit" class="btn col-md-2">Search</button>
                </div>
                 <br>
            <!-- Tutor -->
                <div class="row">
                    <div class="col-md-4">
                         <div class="card">
                                 <center>
                                     <img class="card-img img-fluid" src="../img/tea.png" alt="Card image cap"></center>
                                 <div class="card-body">
                                 <center>
                                   <h5>ANAHI JACOBSON</h5>
                                   <h6>Mathematics/Statistics</h6>
                                   <p>New york.</p>           
                                </center>    </div>
                         </div>
                 	</div> 
                                    <div class="col-md-4">
                                         <div class="card">
                                                <center> <img class="card-img" src="../img/tea.png" alt="Card image cap"></center>
                                                 <div class="card-body">
                                                        <center>
                                                                <h5>ANAHI JACOBSON</h5>
                                                                <h6>Mathematics/Statistics</h6>
                                                                <p>New york.</p>           
                                                            </center> </div>             
                                         </div>   
                                     </div> 
                                    <div class="col-md-4">
                                         <div class="card">
                                                 <center><img class="card-img" src="../img/tea.png" alt="Card image cap"></center>
                                                 <div class="card-body">
                                                        <center>
                                                                <h5>ANAHI JACOBSON</h5>
                                                                <h6>Mathematics/Statistics</h6>
                                                                <p>New york.</p>           
                                                            </center></div>            
                                         </div>   
                                     </div> 
                             </div><br>
                                 <div class="row">
                                 <div class="col-md-4">
                                      <div class="card">
                                              <center><img class="card-img" src="../img/tea.png" alt="Card image cap"></center>
                                              <div class="card-body">
                                                    <center>
                                                            <h5>ANAHI JACOBSON</h5>
                                                            <h6>Mathematics/Statistics</h6>
                                                            <p>New york.</p>           
                                                        </center>     </div>       
                                      </div>
                              </div> 
                                 <div class="col-md-4">
                                      <div class="card">
                                              <center><img class="card-img" src="../img/tea.png" alt="Card image cap"></center>
                                              <div class="card-body">
                                                    <center>
                                                            <h5>ANAHI JACOBSON</h5>
                                                            <h6>Mathematics/Statistics</h6>
                                                            <p>New york.</p>           
                                                        </center>     </div>         
                                      </div>   
                                  </div> 
                                 <div class="col-md-4">
                                      <div class="card">
                                             <center> <img class="card-img" src="../img/tea.png" alt="Card image cap"></center>
                                              <div class="card-body">
                                                    <center>
                                                            <h5>ANAHI JACOBSON</h5>
                                                            <h6>Mathematics/Statistics</h6>
                                                            <p>New york.</p>           
                                                        </center> </div>
                                               </div>   
                                  </div> 
                                 </div>
                </div>

        <!-- Chat -->
            <div class="tab-pane fade" id="list-chat" role="tabpanel" aria-labelledby="list-chat-list">
                <div class="row">
                    <div class="col-md-6 text">
                       
                            <strong>
                            <p>John Doe</p>
                            <hr>
                            <p>John Doe</p>
                            <hr>
                            <p>John Doe</p>
                            <hr>
                            <p>John Doe</p></strong>
                            <hr>
                        </div>
                     <div class="col-md-6">
                        <br>
                         <div class="row">
                            <div class="col-md-2">
                                <img src="../img/tea.png" class="img-fluid">
                            </div>
                            <div class="col-md-10">
                                <input type="text" value="Hello">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                        
                            </div>
                            <div class="col-md-3">
                                <img src="../img/tea.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
        
                </div>
        
            <!-- Notification -->

                
                <!-- history -->
            <div class="tab-pane fade" id="list-history" role="tabpanel" aria-labelledby="list-history-list">.
            
                            <div class="form-group col-md-6">
                              <input type="text" class="form-control" id="search">
                            </div>
                            <BR>
                        <div class="tab-pane fade" id="list-not" role="tabpanel" aria-labelledby="list-not-list">
                                <div class="History"><strong>
                                        <p>John Doe</p>
                                        <hr>
                                        <p>John Doe</p>
                                        <hr>
                                        <p>John Doe</p>
                                        <hr>
                                        <p>John Doe</p></strong>
                                        <hr>
                                    </div>

                        </div>
                    </div> 
            

                <!-- profile -->
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <img src="../img/tea.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-9">
                        <h4>ANAHI JACOBSON</h4>
                        <p>Bayonne, NJ , USA</p>
                        <a><button><i style="font-size:24px" class="fa">&#xf044;</i>
                            edit profile</button></a>

                    </div>
                </div>
                <div class="col-md-12">
                    <center>
                        <hr>
                    </center>

                </div>
                <div class="col-md-12">
                    <h4>WHAT I NEED</h4>
                </div>
                <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect2"></label>
                             <select multiple class="form-control" id="exampleFormControlSelect2">
                                 <option> I need tutors on the following subjects</option>
                                 <!-- <option></option> -->
                                  <option>1.Mathematics</option>
                                  <option>2.English</option>
                                  <option>3.Physics</option>
                                  <option>4. Economics</option>
                                  
                                </select>
                            </div>
                             
                </div>
        
            </div>

            <!-- become a teacher -->
            <div class="tab-pane fade" id="list-Become" role="tabpanel" aria-labelledby="list-Become-list">
                ...</div>
         
        </div>
    </div>
  </div>
@endsection