<?php 
ob_start();
?>

<html>
<head>
<?php
session_start();
$un = $_SESSION['sun'];
include "navigationBarAdmin.php";

?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel=stylesheet type = text/css href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>




				<div class="container">
  <h2 class=text-center style = "color : blue">Add Book</h2>


<div class="col-xs-3">

</div>

<form method="post" enctype = "multipart/form-data">
<div class="form-group col-xs-6">
<label >Book Title</label>
<input type="text" name="bookname" id="bookname" class="form-control" >



<label>Author Name</label>
<input type="text" name = "authorname" id = "authorname" class="form-control" >



<label>Category</label>
<select name="category" class="form-control">
   <option value="ComputerScience">ComputerScience</option>
   <option value="Civil">Civil</option>
   <option value="Mechanical">Mechanical</option>
   <option value="Electrical">Electrical</option>
    <option value="Electronics">Electronics</option>
	 <option value="Management">Management</option>
   <option value="Competitive Exam">Competitive Exam</option>

 </select>




<label>Book Language</label>
<select name="booklang" class="form-control">
   <option value="Hindi">Hindi</option>
   <option value="English">English</option>
 </select>


<label>Book Image</label>
<input type="file" name="image" id="image" class="form-control" >

<label>Purchase Date</label>
<input type="date" name="purchasedate" id="purchasedate" class="form-control" >

<label>Book Condition</label>
<select name="bookcondition" class="form-control">
   <option value="New">New</option>
   <option value="Good">Good</option>
   <option value="Fair">Fair</option>
   <option value="Poor">Poor</option>
 </select>

<label>Quantity</label>
<input type="text" name="quantity" id="quantity" class="form-control" > 
 
 
<label>Price</label>
<input type="text" name="price" id="price" class="form-control" >

<label>Description</label>
<input type="text" name="description" id="description" class="form-control" >


<input type="submit" class="btn btn-primary" name="save"  value="Save"/>
</div>
</form>

<div class="col-xs-3">

</div>

</div>

<?php

include "dbconfigure.php" ;
if(isset($_POST["save"]))
{

$bookname=$_POST['bookname'];
$authorname=$_POST['authorname'];
$category=$_POST['category'];
$booklang=$_POST['booklang'];
move_uploaded_file($_FILES['image']['tmp_name'],"uploadimage/".$_FILES['image']['name']);
			$image = "uploadimage/".$_FILES['image']['name'];

$purchasedate=$_POST['purchasedate'];
$bookcondition=$_POST['bookcondition'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$description=$_POST['description'];
$status="Available";

$query="insert into book(bookname,authorname,category,booklang,bookimage,purchasedate,bookcondition,quantity,price,description,status,username) values('$bookname','$authorname','$category','$booklang','$image','$purchasedate','$bookcondition','$quantity','$price','$description','$status','admin')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Book Uploaded Successfully");
window.location = "viewbookAdmin.php";
</script>';
}
}

?>

<?php  //include "bottom.php "?>
</body>
</html>