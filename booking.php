<?php 
session_start();
include "dbconfigure.php" ;
$u = $_SESSION['sun'];
$query = "select city,address,emailadd,smsno from siteuser where username='$u'";
$rs = my_select($query);
while($column=mysql_fetch_array($rs))
{
$city = $column['city'];
$address = $column['address'];
$emailadd = $column['emailadd'];
$smsno = $column['smsno'];
}
$id = $_GET['id'];
$query1 = "select bookname,price,username,quantity from book where bookid=$id";
$rs1 = my_select($query1);
while($column1=mysql_fetch_array($rs1))
{
$name = $column1['bookname'];
$price = $column1['price'];
$sellername = $column1['username'];
$availableqty = $column1['quantity'];
if($sellername==$u)
{
echo '<script>alert("You Can\'t Buy Ur Own Book!");
window.location = "customer_home.php";
</script>';

}

}


?>
<html>
<head>
<?php include "navigationbar2.php"; ?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel=stylesheet type = text/css href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   
<script>
    function calc()
    {
        
     var quantity1 = document.getElementById("quantity").value;
         var available = document.getElementById("available").value;
	 if(quantity1>available)
	 {
	 alert("Quantity Must Be Less Than or Equal To Availabe Quantity");
	 return;
	 }
	 
     var price1 = document.getElementById("sprice").value;
     var totalprice = parseInt(quantity1)*parseInt(price1);
     
     document.getElementById("total").value = totalprice;
    }
</script>
   
</head>
<body>




				<div class="container">
  <h2 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">BOOKING</h2>
<form method="post" enctype = "multipart/form-data">


<div class="form-group col-xs-8">
<label >Booking Date</label>
<input type="text" name="bookingdate" id="bookingdate" class="form-control" value = "<?php echo date('d-m-y') ?>">



<label>Customer Name</label>
<input type="text" name = "customername" id = "customername" class="form-control" value = "<?php echo $u ?>">



<label >Email ID</label>
<input type="text" name="emailid" id="emailid" class="form-control" value = "<?php echo $emailadd ?>">




<label>Contact</label>
<input type="text" name="contact" id="contact" class="form-control" value = "<?php echo $smsno ?>">


<label>City</label>
<input type="text" name="city" id="city" class="form-control" value = "<?php echo $city ?>">

<label>Address</label>
<input type="text" name="address" id="address" class="form-control" value = "<?php echo $address ?>">

<label>Product Name</label>
<input type="text" name="productname" id="productname" class="form-control" value = "<?php echo $name ?>">

<label>Price</label>
<input type="text" name="sprice" id="sprice" class="form-control" value = "<?php echo $price ?>">

<label>Available Quantity</label>
<input type="text" name="available" id="available" class="form-control" value = "<?php echo $availableqty ?>">

<label>Quantity</label>
<input type="text" name="quantity" id="quantity" class="form-control" onkeyup="calc()">

<label>Total</label>
<input type="text" name="total" id="total" class="form-control" >


<input type="submit" class="btn btn-primary" name="save"  value="Submit"/>
</div>
</form>
</div>

<?php


if(isset($_POST["save"]))
{
$bookingdate=$_POST['bookingdate'];

$customername=$_POST['customername'];

$emailid=$_POST['emailid'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$productname=$_POST['productname'];
$sprice=$_POST['sprice'];
$available=$_POST['available'];
$quantity=$_POST['quantity'];
$total=$_POST['total'];

$remquantity = $available - $quantity;

$query="insert into booking(bookingdate,customername,email,contact,city,address,bookid,price,quantity,total,sellername) values('$bookingdate','$customername','$emailid','$contact','$city','$address','$productname','$sprice','$quantity','$total','$sellername')";
$n = my_iud($query);

if($n==1)
{
$query1="update book set quantity = '$remquantity' where bookid=$id";
$n1 = my_iud($query1);
echo '<script>alert("Booking SuccessFull");
window.location = "viewmybooking.php";
</script>';
}


}

?>

<?php  //include "bottom.php "?>
</body>
</html>