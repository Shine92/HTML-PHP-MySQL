<?php
	include 'link.php';	// $link
//	if (!isset($_SESSION['key'])) header('Location: mb1.php');

	if (isset($_REQUEST['delno'])){
		// 將要刪除資料
		$delno = $_REQUEST['delno'];
		$sql = "DELETE FROM data WHERE id={$delno}";
		mysqli_query($link, $sql);
	}
	$sql = 'SELECT * FROM data';
	$rs = mysqli_query($link, $sql);
	
?>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
/* table viewport */
@media screen and (max-width: 480px) { 
    table,
    tbody {
        display: block;
        width: 100%;
    }
    thead { display: none; }
    table tr,
    table th,
    table td {
        display: block;
        padding: 0;
        text-align: left;
        white-space: normal;
    }
    table tr {
        border-bottom: 1px solid #eee;
        padding-bottom: 11px;
        margin-bottom: 11px;
    }
    table th[data-title]:before,
    table td[data-title]:before {
        content: attr(data-title) ":\00A0";
        font-weight: bold;
    }
    table td {
        border: none;
        margin-bottom: 6px;
        color: #444;
    }
    table td:empty { display: none; }
     table td:first-child {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 6px;
        color: #333;
    }
/* table viewport */
* {
  margin: 0;
  padding: 0;
}

body {
  padding: 10px 20px;
}

table {
  border-collapse: collapse;

}

table + table {
  margin-top: 15px;
}


table th,
table td {
  white-space: nowrap;
  border:;
  padding: 5px 10px;
  text-align: left;
}

table tr th:first-of-type {
  border: 0;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
	function del(which){
		var ret = confirm('你確定要刪除' +  which + '?');
		return ret;
	}
	function edi(which){
		var ret = confirm('你確定要編輯' +  which + '?');
		return ret;
	}
	function go(which){
		var ret = confirm('你確定前往' +  which + '?');
		
		return ret;
	}
</script>

<body>
<nav class="navbar navbar-inverse ">  <!-- 顏色 -->
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

<div class="container">
<table class="table table-hover">

<thead>
	<tr>
		<th>Website</th>
		<th>Account</th>
		<th>Password</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>
</thead>
<tbody>
	<?php 
		while( $row = mysqli_fetch_array($rs)){
			echo '<tr>';
			echo '<td data-title="Website">';
			echo "<a href='{$row['ddurl']}'target='_blank' style='text-decoration:none;' ";
			echo 'onclick="return go(';
			echo "'" . $row['durl'] . "'" . ')">';	
			echo "{$row['durl']}</a>";
			

			echo "<td data-title='Account'>{$row['daccount']}</td>";
			echo "<td data-title='Password'>{$row['dpasswd']}</td>";

			echo '<td data-title="Delete">';			
			echo "<a href=?delno={$row['id']} ";	
			echo 'onclick="return del(';			
			echo "'" . $row['durl'] . "'" . ')">';	// 
			echo "<input type='button' class=\"btn btn-default btn-xs\" value='Delete'/>";
			echo '</a>';			
			echo '</td>';
			echo '<td data-title="Edit">';
			echo "<a href=mb6.php?editno={$row['id']} ";
			echo 'onclick="return edi(';
			echo "'" . $row['durl'] . "'" . ')">';	//
			echo "<input type='button' class=\"btn btn-default btn-xs\" value='Edit'/>";
			echo '</a>';
			echo '</td>';
		}
	?>
</tbody>
</table>
</div>
</body>
</html>