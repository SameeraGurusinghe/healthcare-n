<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Customer Feedbacks</title>
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
@extends('layouts.sidebar')

<div class="content-wrapper">
<div class="container-fluid">


<!--Feedback table area start-->
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
        <h4 style="text-align: center;"><b>CUSTOMER FEEDBACK</b></h4>
             
          <table class="table table-sm table-hover">
            <thead>
              <tr>
                <th scope="col">DATE</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">FEEDBACK</th>
              </tr>
            </thead>
            @foreach($feedback as $data)
            <tbody>
            <tr>
                <td>{{$data->created_at}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->description}}</td>
              </tr>
   
            </tbody>
            @endforeach
          </table>
         
        </div>
      </div>
    </div>
  </div>
</div>
<!--Feedback table area end-->
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