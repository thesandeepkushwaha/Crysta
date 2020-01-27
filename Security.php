<?php
include('dbconnect.php');
if(isset($_POST['submit'])){
	$security=$_POST['security'];
    echo "$security";
    $sql="INSERT INTO user_info (security) VALUES ('$security') WHERE email=";
	$run_query=mysqli_query($conn,$sql);
			   if($run_query){
						echo "<div class='alert alert-success'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									Click <b><a href='index.php'>here</a></b> to login.
								</div>";}
}else{
echo "<div class='container'>
  	         <br><br><br>
            <h2>Security Questions</h2>
  	    <form action='Security.php' method='post'><br><br>
  	    <div class='form-group'>
       
       <label for='security'>What is your birth place?</label> 
       <input type='text' name='security' class='form-control'  placeholder='birthplace' ><br><br>
       </div>
       <input type='submit' name='submit' value='submit' class='btn btn-default'>
         </form></div>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="AMVNEUT9LEYWS">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

</body>
</html>