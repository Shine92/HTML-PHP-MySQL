<?php ?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
/* .container { */
/*   width: 360px; */
/*   margin: 0 auto; */
/*   border: 2px solid gray; */
/* } */
</style>
</head>
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
<div class="container" >
  <form role="form" action='mb9.php'>
  <h3>Add a data</h3>
  <hr/>
    <div class="form-group">
      <label for="Website">Website name:</label>
      <input type="text" style='width: 60%' class="form-control" name="durl" id="Website" placeholder="Add website name" required>
    </div>
    <div class="form-group">
      <label for="daccount">Account:</label>
      <input type="text" style='width: 60%' class="form-control" name="daccount" id="daccount" placeholder="Add daccount" required>
    </div>
    <div class="form-group">
      <label for="daccount">Password:</label>
      <input type="text" style='width: 60%' class="form-control" name="dpasswd" id="dpasswd" placeholder="Add password" required>
    </div>
    <div class="form-group">
      <label for="daccount">Website:</label>
      <input type="url" style='width: 60%' class="form-control" name="ddurl" id="ddurl" placeholder="Add website" required>
      <p>Example:  https://user.gamer.com.tw/login.php</p>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    
  </form>
</div>
</html>