
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book-Resell Hub-A platform for buying and selling preloved books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php include "navigationbar1.php"; ?>




<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="myimages\2.jpg" alt="image1" width="100%" height="550">
    </div>
    <div class="carousel-item">
      <img src="myimages\3.webp" alt="image2" width="100%" height="550">
    </div>
    <div class="carousel-item">
      <img src="myimages\1.jpg" alt="image3" width="100%" height="550">
    </div>
      <div class="carousel-item">
      <img src="myimages/1.jpg" alt="image4" width="100%" height="550">
    </div>
      <div class="carousel-item">
      <img src="myimages/2.jpg" alt="image5" width="100%" height="550">
    </div>
        <div class="carousel-item">
      <img src="myimages/6.jpg" alt="image6" width="100%" height="550">
    </div>
        
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  


<div class="container">
      <form method="get" action=searchresult.php>
          <div class="form-group col-xs-4"> 
<label><b>Search Book By Category</b></label>
<select name="category" class="form-control">
   <option value="ComputerScience">ComputerScience</option>
   <option value="Civil">Civil</option>
   <option value="Mechanical">Mechanical</option>
   <option value="Electrical">Electrical</option>
    <option value="Electronics">Electronics</option>
	 <option value="Management">Management</option>
   <option value="Competitive Exam">Competitive Exam</option>

 </select>
<input type ="submit" value="Search" class="btn btn-block btn-primary">
  </div>
</form>
</div>




</body>
</html>


