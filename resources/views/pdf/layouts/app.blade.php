<!DOCTYPE html>
<html>
<head>
	<title>Shippin Book Store</title>
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="csrf-token" content="{{csrf_token()}}" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/carousal.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body style="padding: 0px">
	<div class="container-fluid">
		@include('include.navbar')
		@yield('content')
	</div>

	<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <hr class="featurette-divider">

 <!-- FOOTER -->
 <div style="margin-top: 100px">
 	<footer class="container" id="footer" >
 		<div class="row">
      
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3  ">
        <div><img src="https://rdsenterprises.online/img/RDS_Logo-01.jpg" width="40px" height="40px"> </div>
        <div class="aboutC">  This online portal is dedicated to school items and making it easier for parents to buy books, uniforms and much more for their kids.
            Now, are you facing these below challenges every academic year:-
            <ul>
          <li>  	Do you stand in long queues and spend your entire day buying school supplies?</li>
          <li> 	Would you rather utilise that time to do something more productive?</li>
            <li> 	Do you remember all the bookstore trips that you made finding that one book but still couldn’t? </li>
        </ul>
            If you do, you are at the right place. 
            Our online portal aims to revolutionise the process of distribution of books and school supplies to the students and making it a cakewalk for you. 
            You can order everything from books, school uniforms, school book sets, stationery, notebooks to accessories on our platform. 
            It is a ONE STOP SHOP for books as well as for school supplies.
            We are dedicated to provide you contactless delivery during this unprecedented time.
            We urge all of you to stay safe and healthy.
            </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 ">
          <h4>QUICK LINK</h4>
          <div>
            <a class="nav-link" href="/terms">Term & Conditions</a>
            <a class="nav-link" href="/privacy">Privacy Policy </a>
            <a class="nav-link" href="/refund">Refund and cancelletion policy</a>
                     
          </div>                  
      </div>
      
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3  ">
          <h4>CONTACT INFO</h4>
            <div>Address: 48A, North Kolkata, Near, Dunlop Crossings, Bidyayatan Sarani, Alambazar, Ariadaha, Kolkata, West Bengal 700035</div>
            <div>Phone: (033) 25102510</div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3  ">
        <h4>SOCIAL LINK</h4>
        <div></div>
      </div>

    </div>
   <div class="text-center w-100 mt-5">	© Copyright RDS Enterprises. All Rights Reserved. Developed by Social Traffik Technologies LLP</div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+ph41jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	 </footer>
 </div>
</body>
</html>

