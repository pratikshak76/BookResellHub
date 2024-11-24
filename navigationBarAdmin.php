
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Reselling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--nav start-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#" style = "color : yellow">Book Reselling</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav">
      
	  <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style = "color : white">
        BOOK
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="addbookAdmin.php" style = "color : black">ADD BOOK</a>
        <a class="dropdown-item" href="viewbookAdmin.php" style = "color : black">VIEW BOOK</a>
		
      </div>
    </li>
	
	
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style = "color : white">
        CUSTOMER
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="viewcustomer.php" style = "color : black">VIEW CUSTOMER</a>
      </div>
    </li>
	

      <li class="nav-item">
        <a class="nav-link" href="viewbookingAdmin.php" style = "color : white">VIEW BOOKINGS</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="viewmysellAdmin.php" style = "color : white">VIEW MY SELL</a>
      </li>
	  
	<li class="nav-item">
        <a class="nav-link" href="signout.php" style = "color : white">LOGOUT</a>
      </li>   
  
    </ul>
  </div>  
</nav>
<!-- navigation end-->
</body>

</html>