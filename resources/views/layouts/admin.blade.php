<!DOCTYPE html>
<html>
<head>
	<title>Book Store Admin</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
		<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/dashboard.css">
	 <script src="https://unpkg.com/feather-icons"></script>
	 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	 <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>
<body>
	@include('include.admin-navbar')
	<div class="container-fluid">
		<div class="row">
			@include('include.admin-sidebar')
			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
		      <div class="pt-3 pb-2 mb-3 border-bottom">
		      	@yield('content')
		      </div>
		  </main>
		</div>
	</div>

	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	 <script>
      feather.replace()
    </script>
    <script type="text/javascript">
    	$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			});
    </script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</body>
</html>