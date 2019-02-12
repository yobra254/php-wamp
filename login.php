<!DOCTYPE html>
<html>
<head>
	<title>Member Registration</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
		  <div class="panel panel-primary">
          <div class="panel-heading">Login Here</div>
          <div class="panel-body"> <!--login form-->
<form role="form" action="log.php" method="POST">
   <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>
  <button type="submit" class="btn btn-danger btn-block">Login</button>
</form>
          </div>
          </div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>
</body>
</html>