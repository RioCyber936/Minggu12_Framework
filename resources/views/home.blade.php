<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Biodata</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-responsive.css')}}" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="index.html">
		        <h2 class="form-login-heading">My Bio</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Rio Febriandistra Adi" autofocus disabled>
		            <br>
		            <input type="text" class="form-control" placeholder="1841720109" disabled>
                    <br>
		            <input type="text" class="form-control" placeholder="TI 3F - Teknik Informatika" disabled>
                    <br>
		            <input type="text" class="form-control" placeholder="Politeknik Negeri Malang" disabled>
		        </div>
		
		          
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/jquery.backstretch.min.js')}}"></script>
    <script>
        $.backstretch("{{ asset('assets/img/background.png')}}", {speed: 500});
    </script>
  </body>
</html>
