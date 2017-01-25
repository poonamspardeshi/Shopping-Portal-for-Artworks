<!DOCTYPE html>
<html lang="en">
<head>
  <title>WDM Assignement 3</title>
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
  <h1>ERROR PAGE</h1>
  <p>This is a page for error </p>
</div>

</body>
</html>

