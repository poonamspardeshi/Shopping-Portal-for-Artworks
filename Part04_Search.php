<!DOCTYPE html>
<html lang="en">
<head>
<script>


        function show() { document.getElementById('area').style.display = 'block'; 
		document.getElementById('area1').style.display = 'none';}
		function show1() { document.getElementById('area1').style.display = 'block'; 
						document.getElementById('area').style.display = 'none';
						}
        function hide() { document.getElementById('area').style.display = 'none';
						document.getElementById('area1').style.display = 'none';		}
    

</script>
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
        <form class="navbar-form" role="search" scope="request">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" action="" method="post">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        </div>
		
  </div>
</nav>
<div class="jumbotron text-center">
  <h1>Search Results</h1>
  
 
</div>
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

?>
<?php
if(isset($_GET["srch-term"])){
$idsearch=$_GET["srch-term"];

//echo $idsearch;
if($idsearch!=null){
	//echo "Area has value $id";
	$sql = "SELECT title,ImageFileName,description from artworks where title like '$idsearch%'";
$result = $conn->query($sql);
$dirname = "images/art/works/square-thumbs/";


if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		$stmtimage= $row["ImageFileName"];
		$images = $dirname."$stmtimage.jpg";
		echo"<br/><br/><br/>";
	echo '<img src="'.$images.'" style="float:left" class="img-thumbnail"/>';
		$stmt= $row["title"];
		$stmtdescr=$row["description"];
		echo $stmt. "<br/>";
		echo $stmtdescr. "<br/>";
		
		}
} else {
    echo "No results for $id";
}
}
}
?>

<form name="form" action="" method="post" autocomplete="off" scope="request">
        <INPUT TYPE=RADIO NAME="X" VALUE="H" onclick="show();"/>Filter By Title </br>
		<input name="area" id="area" style="display: none;" ></input>  </br> 
        <INPUT TYPE=RADIO NAME="X" VALUE="L" onclick="show1();"/>Filter By Description</br>
		<input name="area1" id="area1" style="display: none;" NAME="data" ></input>  </br> 
        <INPUT TYPE=RADIO NAME="X" VALUE="LL" onclick="hide();"/>No Filter</br>
		<input type="submit" name="submit" value="Filter" />
      </form>






<?php

if(isset($_POST["area"])){
$id=$_POST["area"];

//$id1=$_POST["area1"];
//$id2=$_POST["X"];


if($id!=null){
	//echo "Area has value $id";
	$sql = "SELECT title,ImageFileName,description,artworkid from artworks where title like '$id%'";
$result = $conn->query($sql);
$dirname = "images/art/works/square-thumbs/";


if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		$stmtimage= $row["ImageFileName"];
		$images = $dirname."$stmtimage.jpg";
		echo"<br/><br/><br/>";
	echo '<img src="'.$images.'" style="float:left" class="img-thumbnail"/>';
		$stmt= $row["title"];
		$stmtart= $row["artworkid"];
		$stmtdescr=$row["description"];
		//echo "$stmt"."<br/>";
		echo '<a href="Part03_SingleWork.php?id=',$stmtart,'">'.$stmt.'</a></br>';
		echo $stmtdescr. "<br/>";
		
		}
} else {
    echo "No results for $id";
}
}
}
if(isset($_POST["area1"])){

$id1=$_POST["area1"];
if($id1!=null){
	//echo "Area1 has value.'$id1'.";
		$sql = "SELECT title,ImageFileName,Description,artworkid from artworks where Description like '%$id1%'";
$result = $conn->query($sql);
$dirname = "images/art/works/square-thumbs/";


if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		$stmtimage= $row["ImageFileName"];
		$stmtart= $row["artworkid"];

		$images = $dirname."$stmtimage.jpg";
		echo"<br/><br/><br/>";
	echo '<img src="'.$images.'" style="float:left" class="img-thumbnail"/>';
		$stmt= $row["title"];
		$stmtdescr=$row["Description"];
		//echo $stmt. "<br/>";
		echo '<a href="Part03_SingleWork.php?id=',$stmtart,'">'.$stmt.'</a></br>';
		echo $stmtdescr. "<br/>";
		
		}
} else {
    echo "No results for $id1";
}
}
}
if(isset($_POST["X"])){

$id2=$_POST["X"];
if($id2=="LL"){
	$sql = "SELECT title,ImageFileName,description,artworkid from artworks";
$result = $conn->query($sql);
$dirname = "images/art/works/square-thumbs/";


if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		$stmtimage= $row["ImageFileName"];
		$stmtart= $row["artworkid"];

		$images = $dirname."$stmtimage.jpg";
		echo"<br/><br/><br/>";
	echo '<img src="'.$images.'" style="float:left" class="img-thumbnail"/>';
		$stmt= $row["title"];
		$stmtdescr=$row["description"];
				echo '<a href="Part03_SingleWork.php?id=',$stmtart,'">'.$stmt.'</a></br>';

		echo $stmtdescr. "<br/>";
		
		}
} else {
    //echo "No results for $id";
}
}

}


$conn->close();

?>

</body>
</html>

