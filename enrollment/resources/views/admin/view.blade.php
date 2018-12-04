@extends('layout')
@section('content')


        
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title" style=" text-align: center;
      font-family: verdana;
      font-size: 300%;">Student Details:</h2>
                  <img src="{{URL::to($student_view_details->student_image)}}"  style="height: 47px;width: 47px">
                  <p class="name">Name:{{$student_view_details->student_name}}</p>
                   <p class="name">Student ID: {{$student_view_details->student_roll}} -</p>
                  <p class="name">Department:{{$student_view_details->student_department}} -</p>
                  
                  <a class="number" href="#">Mobile:01751554502</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li style= " border: 1px solid black;"><p>Father name:</p><p>{{$student_view_details->student_fathername}}</p></li>

                    <li style= " border: 1px solid black;"><p>Mother name:</p><p>{{$student_view_details->student_mothername}}</p></li>


                     <li style= " border: 1px solid black;"><p>Email:</p><p>{{$student_view_details->student_email}}</p></li>
                    
                   
                  </ul>
                 
                   <ul class="achivements">
                     <li style= " border: 1px solid black;"><p>Address</p><p>{{$student_view_details->student_address}}</p></li>

                      <li style= " border: 1px solid black;"><p>Year</p><p>{{$student_view_details->student_year}}</p></li>
                   </ul>

              <div class="info-links">
                    <a class="website" 
                     href="{{URL::to('/student_result_show/'.$student_view_details->student_roll)}}">
                      <i class="icon-globe icon"></i>
                      <span 
                      style= "text-align:center;border: 3px solid #4CAF50;font-family:verdana;font-size: 200%; margin-left: 150px;
                     ">Result</span>
                    </a>
               </div>

                </div>
              </div>
            </div>


         
          </div>
       
		
		



@endsection