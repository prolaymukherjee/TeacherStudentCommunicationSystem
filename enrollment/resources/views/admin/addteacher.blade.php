<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher student communction system</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
#center{
    text-align: center;
}
#p{
    text-align: center;
    font-size: 200%;
}

.footer {
   
   
    bottom: 0;
    width: 100%;
    background-color:black;
    color: white;
    text-align: center;
    padding: 15px;
  }
</style>


</head>
<body>




<div id="content" class="span10">


    <ul class="breadcrumb"">
        <div id="p">
            <i class="icon-edit"></i>
            <a href="#">Teacher Registration Form</a>
        </div>
    </ul>


   


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-horizontal" action="{{url('/save-teacher')}}" method="post"
                  enctype="multipart/form-data">

                {{ csrf_field() }}

                <fieldset>
                    <div class="form-group">
                        <label  class="control-label col-sm-2" for="date01">Teacher Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="teacher_name">
                        </div>
                    </div>

                   <div class="form-group">
                        <label  class="control-label col-sm-2"" for="date01">My Initial:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="teacher_initial">
                        </div>
                    </div>


                    <div class="form-group">
                        <label  class="control-label col-sm-2" for="date01">Teacher's Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="teacher_email">
                        </div>
                    </div>


                    <div class="form-group">
                        <label  class="control-label col-sm-2" for="date01">Teacher phone:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="teacher_phone">
                        </div>
                    </div>


                    <div class="form-group">
                        <label  class="control-label col-sm-2" for="date01">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>


                    <div class="form-group">
                        <label  class="control-label col-sm-2" for="sel1">Teacher Department:</label>
                        <select  id="sel1" name="teacher_department">
                            <option>CSE</option>
                            <option>EEE</option>
                            <option>BBA</option>
                            <option>ECE</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="fileInput">Image:</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="teacher_image"
                                   id="fileInput" type="file">
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-block enter-btn">Add Teacher</button>
                    </div>
                </fieldset>
            </form>

       
<br>
<div class="footer">
  <p>Copyright &copy;Gloaming soft </p>
</div>


 </div>

</body>
</html>

