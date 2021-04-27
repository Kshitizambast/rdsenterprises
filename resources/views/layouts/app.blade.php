<!DOCTYPE html>
<html>
<head>
	<title>Shippin Book Store</title>
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
 		<div class="mb-2">
 				<b>Phone number:  7878094604 </b><br>
 		<b>email:  something@some.com </b>
 		</div>
	    <p class="float-end"><a href="#">Back to top</a></p>
	    <p>Developed by: <b>Social Traffik Technologies LLP</b></p>
	 </footer>
 </div>
</body>
</html>

