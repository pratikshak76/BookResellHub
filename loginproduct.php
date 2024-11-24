<?php
/*
on anonymous page, any one can visit
strangers(anonymous) are also allowed
*/
@session_start();
include "dbconfigure.php";
$msg="";
if(verifyuser())
{
$un=fetchusername();
$msg="Welcome $un , <br /><a href='signout.php'>Signout</a>";
}
else
{
$msg="Welcome Guest ,";
$msg.="<br/>Existing user <a href='signin.php'>Signin</a>";
$msg.="<br/>New user <a href='signup.php'>Signup</a>";
}
?>

<!DOCTYPE html>
<html>
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
    </head>
    <body>
       
        <!-- Start Nagigation -->
  <?php include "navigationbar1.php"; ?>
      
        
        
        
        
        
       <div class="container">
			<form method='post'>
                             <input type="hidden" name="page" value="login"> 
				<table class="table table-borderless">
					<tr>
						<td colspan="2">
							<center><h2 style = "font-family : 'Monotype Corsiva' ; color : #E6120E">Login Form</h2></center>
						</td>
					</tr>
					<tr>
						<td>
							<label>User Name</label>
						</td>
						<td>
            <input type="text" class="text" placeholder="User Name" name="username">
						</td>
					</tr>
					<tr>
						<td>
							<label>Password</label>
						</td>
						<td>
           <input type="password" class="text" placeholder="Password" name="pwd">
						</td>
					</tr>
					
							
							
							
							
							<tr>
<td>Remember Me</td>
<td><input type="checkbox" name="rem"  value='yes'>
</td>
</tr>
							
							
							
							
							
					
					<tr>
<td colspan='2' align='center'>
<input type="submit" name="login"  value="login" style = "width : 330px" class = "btn btn-primary">

</td>
</tr>
<tr>
<td>New User <input type="submit" name="signup"  value="SignUp" class = "btn btn-primary"></td>
</tr>
				</table>
			</form>
		</div> 
    </body>
</html>



<?php
if(isset($_REQUEST['signup']))
{
header("Location:signup.php");
}


if(isset($_REQUEST['login']))
{
$username=$_REQUEST['username'];
$pwd=$_REQUEST['pwd'];
//syntax to fetch value of checkbox
if(isset($_REQUEST['rem']))
$remember='yes';
else
$remember='no';
//echo "<br/>$username,$pwd,$remember";

//1. check if user is valid or not
$query="select count(*) from siteuser where username='$username' and pwd='$pwd'";
include_once "dbconfigure.php";
$ans=my_one($query);
if($ans==1)
{
//2. save username and pwd to session variables
$_SESSION['sun']=$username;
$_SESSION['spwd']=$pwd;

//3. if remember is yes, save them to cookies too
if($remember=='yes')
{
setcookie('cun',$username,time()+60*60*24*7);
setcookie('cpwd',$pwd,time()+60*60*24*7);
}

//4. fetch role of user
$query="select role from siteuser where username='$username' and pwd='$pwd'";
$ans=my_one($query);
//echo "<br/>You are a valid user and your role is $ans";
//$targetpage=$ans."_home.php";
header("Location:booking.php?id=".$_GET['productid']);

}
else
{
header("Location:loginerror.php");
}


}
?>
		

