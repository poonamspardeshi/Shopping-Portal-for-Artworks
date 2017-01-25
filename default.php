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
      <li class="active"><a href='default.php'>Home</a></li>
	        <li><a href='AboutUs.php'>About Us</a></li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Pages <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Part01_ArtistsDataList.php">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Poonam Pardeshi</a></li>
         </ul>
		  <div class="col-sm-3 col-md-3 pull-right">
        <form class="navbar-form" role="search" action="Part04_Search.php" method="get">
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
  
<div class="jumbotron text-center">
  <h1>Welcome to Assignment #3</h1>
  <p>This is the third assignment for Poonam Pardeshi CSE </p>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <h3> 
	  <span class="glyphicon glyphicon-about"></span> About Us
	  </h3>
      
      <p>What this is all about and other stuff</p>
	  <a href="AboutUs.php" class="btn btn-default" role="button">
	   <span class="glyphicon glyphicon-link"></span> Visit Page
	  </a>
    </div>
	 <div class="col-sm-2">
      <h3> 
	  <span class="glyphicon glyphicon-about"></span> Artist List
	  </h3>
      
      <p>Display List of Artist Names as a list</p>
	 <a href="Part01_ArtistsDataList.php" class="btn btn-default" role="button">
	 
	   <span class="glyphicon glyphicon-link"></span> 
	  Visit Pages</a>
	  </button>
	  </form>
    </div>
	 <div class="col-sm-2">
      <h3> 
	  <span class="glyphicon glyphicon-about"></span> Single Artist
	  </h3>
      
      <p>Displays information for a single artist</p>
	  <a href="Part02_SingleArtist.php?id=19" class="btn btn-default" role="button">
	   <span class="glyphicon glyphicon-link"></span> Visit Page
	  </a>
    </div>
	 <div class="col-sm-2">
      <h3> 
	  <span class="glyphicon glyphicon-about"></span> Single Work
	  </h3>
      
      <p>Displays information for a single work</p>
	   <a href="Part03_SingleWork.php?id=394&image=099010" class="btn btn-default" role="button">
	   <span class="glyphicon glyphicon-link"></span> Visit Page
	  </a>
    </div>
	 <div class="col-sm-2">
      <h3> 
	  <span class="glyphicon glyphicon-about"></span> Search
	  </h3>
      
      <p>Performs search on artworks table</p>
	  <a href="Part04_Search.php" class="btn btn-default" role="button">
	   <span class="glyphicon glyphicon-link"></span> Visit Page
	  </a>
    </div>
    
  </div>
</div>


</body>
</html>

