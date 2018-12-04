@extends('layout')
@section('content')

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">ALL Student Information</h2>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                        <tr>
                            <th>St_name</th>
                            <th>St_Roll</th>
                            <th>St_Image</th>
                            <th>St_Address</th>
                            <th>St_Department</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($students as $v_students)
                        @if($v_students != null)
                            <tr>
                                <td>{{ $v_students->student_name }}</td>
                                <td>{{ $v_students->student_roll }}</td>
                                <td class="center"><img src="{{URL::to($v_students->student_image)}}"
                                                        style="height: 80px;width: 80px"></td>
                                <td>{{$v_students->student_address}}</td>
                                <td>{{$v_students->student_department}}</td>

                                <td>
                                    <a href="{{URL::to('/view/'.$v_students->student_id)}}">
                                        <button class="btn btn-outline-primary">View</button>
                                    </a>

                                    <a href="{{URL::to('/edit_student/'.$v_students->student_id)}}">
                                        <button class="btn btn-outline-danger">Edit</button>
                                    </a>

                                    <a href="{{URL::to('/delete_student/'.$v_students->student_id)}}">
                                        <button onclick='return confirm("Are you sure?")' class="btn btn-outline-warning">Delete</button>
                                    </a>

                                    <a href="{{ route('all.counselling.student', $v_students->student_roll) }}">
                                        <button class="btn btn-outline-warning">Counselling</button>
                                    </a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        function ConfirmDelete()
          {
          var x = confirm("Are you sure you want to delete?");
          if (x)
            return true;
          else
            return false;
          }
    
    </script>

@endsection