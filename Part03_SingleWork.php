<!DOCTYPE html>
<html lang="en">
<head>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>

<style>

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}



table {
color: #333;
font-family: Helvetica, Arial, sans-serif;
width: 640px;
border-collapse:
collapse; border-spacing: 0;
}

td, th {
border: 1px solid transparent; /* No more visible border */
height: 30px;
transition: all 0.3s; /* Simple transition for hover effect */
}

th {
background: #DFDFDF; /* Darken header a bit */
font-weight: bold;
}

td {
background: #FAFAFA;
text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */
tr:nth-child(even) td { background: #F1F1F1; }

/* Cells in odd rows (1,3,5...) are another (excludes header cells) */
tr:nth-child(odd) td { background: #FEFEFE; }

tr td:hover { background: #666; color: #FFF; } /* Hover cell effect! */
</style>

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
global $ID;
$ID=$_GET['id'];

$image=$_GET['image'];
if($image==null){
	$image='01010';
}
$sql = "SELECT Title,artistID,description,cost,yearofwork,width,height,originalhome from artworks where ArtworkID=$ID";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
        $stmt= $row["Title"];
		$stmt2=$row["description"];
		$stmt3=$row["cost"];
		$stmt4=$row["yearofwork"];
		$stmt5=$row["width"];
		$stmt6=$row["height"];
		$stmt7=$row["originalhome"];
		$stmt8=$row["artistID"];
		echo $stmt."<br/> <br/> <br/>";
		//By echo '<a href="Part02_SingleArtist.php?id=',$id,'">'..'a>';
		
		
$dirname = "images/art/works/medium/";

$images = $dirname."$image.jpg";
//header("Content-Type:image/jpeg");
echo(
'<img id="myImg" src="'.$images.'" alt="Trolltunga, Norway" width="350" height="400" style="float:left">
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>');

   
	echo $stmt2."<br/><br/>";	
		echo(
		'<div class="color1"> $'.$stmt3.'
		</div>'
		);
		
		
		
		}
} else {
    echo "0 results";
}
 
$sql1="SELECT lastname,artistID from artists where artistid=$stmt8";

$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
        $stmt= $row["lastname"];
		$stmt1=$row["artistID"];
		echo 'By <a href="Part02_SingleArtist.php?id=',$stmt1,'">'.$stmt.'</a>';
		}
		
} else {
    echo "0 results";
}


//$conn->close();
?>
<center>
<div class="btn-group">
  <button type="button" class="btn btn-default">
  <span class="glyphicon glyphicon-info-th-large"></span>Add To Wishlist</button>
   <button type="button" class="btn btn-default">
  <span class="glyphicon glyphicon-info-th-large"></span>Add To Shopping Cart</button><br/><br/><br/><br/>
  
</div>
</center>


 <?php
// echo $ID;
 $sql = "SELECT genres.genrename from artworkgenres join genres on artworkgenres.genreid=genres.genreid where artworkgenres.ArtworkID=$ID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
        $stmtgenre= $row["genrename"];
		
		//echo $stmtgenre."<br/> <br/> <br/>";
		
		
		

		
		}
} else {
    echo "0 results";
}
 
 $sql = "SELECT subjects.SubjectName from artworksubjects join subjects on artworksubjects.subjectId=subjects.subjectId where artworksubjects.ArtworkID=$ID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
        $stmtsub= $row["SubjectName"];
		//echo $stmtsub;
		
		}
} else {
    echo "0 results";
}
 
$sql = "SELECT orders.DateCreated from orders join orderdetails on orders.OrderID=orderdetails.OrderID where orderdetails.ArtworkID=78;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
        $stmtdt= $row["DateCreated"];
		//echo $stmtsub;
		
		}
} else {
    echo "0 results";
}
 



$conn->close();
 ?>

<center>
<table cellpadding="5" cellspacing="5">
    <thead>
      <tr>
        <th colspan="2">Product Details</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Date</td>
        <td><?php echo $stmt4; ?></td>
        
      </tr>
	  <tr>
        <td>Dimension</td>
        <td><?php echo $stmt5."cm X ".$stmt6."cm"; ?></td>
        
      </tr>
	   <tr>
        <td>Home</td>
        <td><?php echo $stmt7 ?></td>
        
      </tr>
	  
	   </tr>
	   <tr>
        <td>Genre</td>
        <td><?php echo '<a href="#">'.$stmtgenre.'</a>'; ?></td>
        
      </tr>
	  
	  </tr>
	   <tr>
        <td>Subject</td>
        <td><?php echo '<a href="#">'.$stmtsub.'</a>'; ?></td>
        
      </tr>
     
    </tbody>
  </table>
  </br>
  </br>
  </br></br>
  </br></br>
  </center>
  
  <center>
<table cellpadding="5" cellspacing="5">
    <thead>
      <tr>
        <th>Sales</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td><?php echo '<a href="#">'.$stmtdt.'</a>'; ?></td>
        
     
    </tbody>
  </table>
  </br>
  </br>
  </br></br>
  </br></br>
  </center>

 
</body>
</html>
