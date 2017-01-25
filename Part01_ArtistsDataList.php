<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
 
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Assignment 3</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="default.php">Home</a></li>
	        <li><a href="AboutUs.php">About Us</a></li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Poonam Pardeshi</a></li>
         </ul>
		  <div class="col-sm-3 col-md-3 pull-right">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" action="Part04_Search.php"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        </div>
		
  </div>
</nav>
<div class="panel panel-default">
    <div class="panel-body" style="max-width:2">
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$db="art";
// Create connection
$conn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "SELECT artistid,lastname,firstname,YearOfBirth,YearOfDeath from artists order by lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		$id= $row["artistid"];
		//echo $id;
        $stmt= $row["firstname"].'&nbsp'. $row["lastname"]."(".$row["YearOfBirth"]."-".$row["YearOfDeath"].")"."<br>";
		echo '<a href="Part02_SingleArtist.php?id=',$id,'">'.$stmt.'</a>';
		//echo $stmt;
		//$link_address="Part02_SingleArtist.php";
		
		
		}
} else {
    echo "0 results";
}
$conn->close();
?>

</div>
  </div>

</body>
</html>

