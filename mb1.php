<?php ?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style> 
#container {
  width: 360px;
  margin: 0 auto;
  border: 2px solid gray;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li><a href=""><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" href="mb8.php"><span class="glyphicon glyphicon-cloud-upload"></span> Add</a>       
      </li>
      <li><a href="mb5.php"><span class="glyphicon glyphicon-eye-open"></span> Enquiry</a></li>
      <li><a href="mb10.php"><span class="glyphicon glyphicon-info-sign"></span> Explain</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="mb3.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container" id="container">
  <div style="text-align:center;"><h3>Welcome</h3></div>
  <hr/>
  <form role="form" action='mb2.php' method='POST'>
    <div class="form-group">
      
      <input type="text" class="form-control" name="account" placeholder="Enter Account" required>
    </div>
    <div class="form-group">
      
      <input type="password" class="form-control" name="passwd" placeholder="Enter password" required>
    </div>
    <div style="text-align:center;">
    <button type="submit"  name='login' class="btn btn-default">Sign in</button>
  	</div>
  </form>
</div>
</html>