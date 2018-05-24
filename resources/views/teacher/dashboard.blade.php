@extends('layouts.app')
@section('content')
<div class="row">
    @include('partials.teacher-sidebar')
        <!-- End of List group -->
        <!-- Tab Content -->
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
              <!-- Job Page -->
             

        
            
            <!-- Notifications Page begins -->
            
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