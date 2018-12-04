@extends('student_layout')
@section('content')


        
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                   <h2 class="card-title" style=" text-align: center;
      font-family: verdana;
      font-size: 300%;">Student Details:</h2>
                  <img src="{{URL::to($student_profile->student_image)}}"  style="height: 47px;width: 47px">

                  <p class="name">Name:{{$student_profile->student_name}}</p>
                   <p class="name">Student ID: {{$student_profile->student_roll}} -</p>
                  <p class="name">Department:{{$student_profile->student_department}} -</p>
                  
                  <a class="number" href="#">Mobile:01751554502</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li style= " border: 1px solid black;"><p>Father name:</p><p>{{$student_profile->student_fathername}}</p></li>

                    <li style= " border: 1px solid black;"><p>Mother name:</p><p>{{$student_profile->student_mothername}}</p></li>

                    <li style= " border: 1px solid black;"><p>Email:</p><p>{{$student_profile->student_email}}</p></li>
                    
                  </ul>


                   <ul class="achivements">
                     <li style= " border: 1px solid black;"><p>Address</p><p>{{$student_profile->student_address}}</p></li>
                      <li style= " border: 1px solid black;"><p>Year</p><p>{{$student_profile->student_year}}</p></li>
                      
                   
                   </ul>
                 
                 <!-- <div class="info-links">
                    <a class="website" href="https://www.bootstrapdash.com/">
                      <i class="icon-globe icon"></i>
                      <span>https://www.bootstrapdash.com/</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon"></i>
                      <span>https://www.facebook.com/johndoe</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon"></i>
                      <span>https://www.linkedin.com/johndoe</span>
                    </a>-->


                    <!--<div class="info-links">
                    <a class="website" href="https://www.bootstrapdash.com/">
                      <i class="icon-globe icon"></i>
                      <span>Result</span>
                    </a>
                     </div>-->

                  </div>
                </div>
              </div>
            </div>


         
          </div>
       
		
		



@endsection