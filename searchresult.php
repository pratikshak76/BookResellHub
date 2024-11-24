<!DOCTYPE html>
<html lang="en-US">
    <head>
        
        <meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content = "IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel ="stylesheet" type ="text/css" href="css/bootstrap.min.css">
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script type = text/javascript src="js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        
		
		
        <title>Book Reselling</title>
        <style>
           
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 400px;
      
      
      
   
 
        </style>
    </head>
    <body>
        <!-- Start Nagigation -->
		<?php include "navigationbar1.php"; ?>
 <!-- End Navigation -->
 <div style = "margin-top : 100px" class = container>
<?php 
include "dbconfigure.php";
$category = $_GET['category'];
  
     $query = "select * from book where category='$category' and quantity>0";
$rs = my_select($query);
while($column=mysqli_fetch_array($rs))
{
?>
<div class="media">
    <div class="media-left">
      <img src = "<?php echo $column['bookimage'] ?>" class="media-object" style="width:100px ; height : 105px">
    </div>
    <div class="media-body">
      <h4 class="media-heading" style = "color : red ; font-family : 'Monotype Corsiva'"><?php  echo $column['bookname'] ?></h4>
      <p> Price :  <?php  echo $column['price'] ?> INR</p>
      <p>  <?php  echo $column['description'] ?></p>
      <p> <a href = 'loginproduct.php?productid=<?php  echo $column['bookid'] ?>'>BOOK NOW </a></p>
      
    </div>
  </div>
  <hr>
  <?php
}
 
  ?>
  
  </div>
  
    </body>
</html>
