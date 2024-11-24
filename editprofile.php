<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

</head>
<body>
<?php include "navigationbar2.php" ?>
<div>
<?php
/*
on authentic page, only valid users of website can visit
strangers(anonymous) are not allowed
*/
@session_start();
include_once "dbconfigure.php";
$msg="";
if(verifyuser())
{
if(fetchrole()=='customer')
	{
	$un=fetchusername();
	$status = "logout";
$msg='Welcome $un , <br /><a href="index.php?a='.$status.'">Signout</a>';
/*echo '<td><a href="familyViewAdmin2.php?id='.$column['clientid'].'&gname='.$column['groupname'].'">*/
	}
	else
	{
header("Location:loginerror.php");
	}
}
else
{
header("Location:loginerror.php");
}
?>



<div class = container style = "margin-top : 100px">
<h2 class = text-center>Edit Profile</h2>
<?php 
$query = "select * from siteuser where username='$un'";
$rs = my_select($query);
echo "<div class='table-responsive'>";
echo "<table class='table table-hover table-borderless'>";
while($column=mysql_fetch_array($rs))
{
echo '<form method = post>';
echo "<tr><th>UserName</th> <td><input type = text name = 'username' value = $column[0]></td></tr>";
echo "<tr><th>Password</th> <td><input type = text name = 'pwd' value = $column[1]></td></tr>";
echo "<tr><th>Date of Birth</th> <td><input type = date name = 'dob' value = $column[2]></td></tr>";
echo "<tr><th>City</th> <td><input type = text name = 'city' value = $column[3]></td></tr>";
echo "<tr><th>Address</th> <td><input type = text name = 'address' value = $column[4]></td></tr>";
echo "<tr><th>Email ID</th> <td><input type = text name = 'emailadd' value = $column[5]></td></tr>";
echo "<tr><th>Contact Number</th> <td><input type = text name = 'smsno' value = $column[6]></td></tr>";
}
echo "</table>";
echo '<input type = submit value = "Submit" class="btn btn-primary" name="edit"></form>';
?>

</div>
<?php  //include "bottom.php"; ?>
<?php
if(isset($_POST['edit']))
{
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$address = $_POST['address'];
$smsno = $_POST['smsno'];
$emailadd = $_POST['emailadd'];
$query = "update siteuser set username='$username',pwd='$pwd',dob='$dob',city='$city',address='$address',smsno='$smsno',emailadd='$emailadd' where username='$un'";
my_iud($query);
header("Location:customer_home.php");
}
?>










</body>
</html>