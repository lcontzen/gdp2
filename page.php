<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<title>Découvre l'ULB!</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  
  <body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Découvre l'ULB</a>
        </div>
      </div>
    </div>
	
	<div class="container">
	  <div class="row">
		<div class="span12" style="text-align: justify;">
		  <?php include $action.".php"; ?>
		</div>
	  </div>
	</div>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
	</div>
  </body>
</html>
