<?php 
    include('dbconnect.php');
	session_start();

	$uid=$_SESSION['uname'];
	$sql="SELECT password FROM user_info WHERE first_name='$uid'";
	$run_query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($run_query);
	$oldpassworddb = $row['password'];
	echo "<br>";
	 
if ($uid) {
  	if(isset($_POST['submit'])){
		 
               $oldpassword=md5($_POST['oldpassword']);
		       $newpassword=md5($_POST['newpassword']);
		       $repeatnewpassword=md5($_POST['repeatnewpassword']);
		       
		       if($oldpassworddb==$oldpassword){
                   if($newpassword==$repeatnewpassword) {
		           $newsql="UPDATE user_info SET password = '$newpassword' WHERE first_name='$uid'";
		           if (mysqli_query($conn, $newsql)) {
                   session_destroy();
		           die("your password has been changed <a href='index.php'>return</a> to the main page");
                   } else {
                   echo "Error updating record: " . mysqli_error($conn);
                   }
		           
		           }
		           else{
		           	echo "New Password doesn't Match";
		           }
		        }else{
		   	    die("Old Password doesn't Match");
		        }
	}else{
  	  echo "<div class='container'>
  	         <br><br><br>
            <h2>Change Password</h2>
  	   <form action='change_password.php' method='post'><br><br>
  	   <div class='form-group'>
       <label for='Old Password'>Old Password </label>
       <input type='text' name='oldpassword' class='form-control' placeholder='oldpassword'><br><br>
       <label for='New Password'>New Password </label>
       <input type='password' name='newpassword' class='form-control'  placeholder='newpassword'><br><br>
       <label for='Repeat NewPassword'>Repeat Newpassword </label> 
       <input type='password' name='repeatnewpassword' class='form-control'  placeholder='repeatnewpassword' ><br><br>
       </div>
       <input type='submit' name='submit' value='Change Password' class='btn btn-default'>
         </form></div>";
     }
}else{
     die("you must be logged in to change password");
  }
  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crysta</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/fav.png">
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top"  id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Crysta</a>
			</div>
</body>
</html>
