<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>

</script>
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
<div class="container"  >
<h1>Explain</h1>
<p>This	is my first project</p>
<pre>
<p>每個人從出生就開始擁有許多帳號密碼,例如存摺簿密碼,提款卡密碼,信箱密碼,Facebook密碼...</p>
<p>你是否跟我一樣常常按下"<strong>忘記密碼</strong>"...</p>
</pre>
</div>
<div class="container"  >
<h1>Use</h1>
<p>Making Data Tables Responsive</p>
<pre>
@media screen and (max-width: 480px) { 

}
<a href='http://blog.apps.npr.org/2014/05/09/responsive-data-tables.html' target='_blank'>http://blog.apps.npr.org/2014/05/09/responsive-data-tables.html</a>
</pre>
</div>
<div class="container"  >
<p>phpMyAdmin</p>
<pre>
查詢會員
$sql = "SELECT * FROM member WHERE account='{$account}'" .
	" and passwd='{$passwd}'";
新增會員			
$sql = "INSERT INTO member (account,passwd,name)" . 
	" VALUES ('{$account}','{$passwd}','{$name}')";
更新資料
$sql = "UPDATE data SET durl='{$durl}', daccount='{$daccount}',
	dpasswd='{$dpasswd}',ddurl='{$ddurl}' WHERE id='{$id}'";
刪除資料
$sql = "DELETE FROM data WHERE id={$delno}";
		mysqli_query($link, $sql);	 
?delno={$row['id']};		
</pre>
</div>
<div class="container"  >
<p>UI</p>
<pre>
Bootstrap Navigation Bar.
Bootstrap Buttons.
Bootstrap Tables.
Bootstrap Icons.
Bootstrap Forms. 
</pre>
</div>
</body>
</html>