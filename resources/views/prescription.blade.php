<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Order Now</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/titlelogo.png"/>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/mainstyle.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link href="assets/css/app-style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/mainstyle.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body><br><br>
@extends('layouts.header')

<!-- Start wrapper-->
<div id="wrapper">

<!--sidebar-wrapper-->
@extends('layouts.cusslidebar')


<div class="content-wrapper">
  <div class="container-fluid">

    <!--News area start-->
   <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 style="text-align: center;"><b>Submit Prescription Details</b></h4>
				

          @foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
            {{$error}}
          </div>
          @endforeach

          <form action="{{url('/postprescription')}}" method="POST" enctype="multipart/form-data">
          @csrf

            <div class="p-2">           
              <input type="text" style="background-color:#181618;" name="cusname" class="form-control"  placeholder="Full Name">
			      </div>
                          
            <div class="p-2">           
              <input type="text" style="background-color:#181618;" name="cusaddress" class="form-control"  placeholder="Address">
			      </div>

            <div class="p-2">           
              <input type="text" style="background-color:#181618;" name="email" class="form-control"  placeholder="Email">
			      </div>

            <div class="p-2">           
              <input type="text" style="background-color:#181618;" name="cusnic" class="form-control"  placeholder="NIC">
			      </div>

            <div class="p-2">
                <input type="text" style="background-color:#181618;" name="cusnumber" class="form-control" placeholder="Contact Number">
            </div>

            <div class="p-2">
                <textarea type="text" style="background-color:#181618;" name="comment" class="form-control" placeholder="Comment"></textarea>
            </div>

            <div class="p-2">           
                <input type="file" style="background-color:#181618;" name="image" class="form-control" placeholder="Prescription Image">
			      </div>
									
			      <div class="p-2">
            <!--<button type="submit" class="btn btn-success btn-sm" style="width: 80px; float: right;" name="addnews">PUBLISH</button>-->
				    <button type="submit" class="btn btn-success btn-sm" style="float: right;">SUBMIT</button>
				    <button type="reset" class="btn btn-warning btn-sm" style="float: right;">CLEAR</button>									    
            </div>
          
            </form>

        </div>
      </div>
    </div>
	</div><BR><BR><BR>    
<!--News area END-->

</div></div>

</div>
  
<!--footer-->
@extends('layouts.footer')

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
</body>
</html>