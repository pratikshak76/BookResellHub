<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<style>
td{font-weight : bold ; color : purple}
</style>
</head>
<body>
<?php include "navigationBarAdmin.php" ?>
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
if(fetchrole()=='admin')
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
<?php 
$query = "select * from siteuser where username='$un'";
$rs = my_select($query);
echo "<div class='table-responsive'>";
echo "<table class='table table-hover table-borderless'>";
while($column=mysql_fetch_array($rs))
{
echo "<tr><th>UserName</th> <td>$column[0]</td></tr>";
echo "<tr><th>Date of Birth</th> <td>$column[2]</td></tr>";
echo "<tr><th>City</th> <td>$column[3]</td></tr>";
echo "<tr><th>Address</th> <td>$column[4]</td></tr>";
echo "<tr><th>Email ID</th> <td>$column[5]</td></tr>";
echo "<tr><th>Contact Number</th> <td>$column[6]</td></tr>";
}
echo "</table>";
echo '<form method = post><input type = submit value = "Edit Profile" class="btn btn-primary" name="edit"></form>';
?>

</div>
<?php  //include "bottom.php"; ?>
<?php
if(isset($_POST['edit']))
{
header("Location:editAdminprofile.php");
}
?>










</body>
</html>