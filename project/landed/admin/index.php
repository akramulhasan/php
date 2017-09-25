<?php include("crud.php");


if(isset($_REQUEST['submit'])){
 	extract($_REQUEST);

 	if(!empty($email && $pass)){

	$encripted_pass = sha1($pass); // to encript password

 	if($connection->Login("users","*","email='$email' AND password='$encripted_pass'")){

		session_start();

 		$user_data = $connection->Login("users","*","email='$email' AND password='$encripted_pass'");
 		extract($user_data);

 		//print_r($user_data);
 		$_SESSION['user_id']=$user_data['user_id'];
 		$_SESSION['f_name']=$user_data['first_name'];
 		$_SESSION['l_name']=$user_data['last_name'];
 		$_SESSION['email']=$user_data['email'];
 		

 		header("Location: dashboard.php");
 		
 	}
 	else{
		
		$msg = "<i style='color:red;'>Invalid Email or Password</i>";
 	}
 }else{

 	$msg = "<i style='color:#B74554;'>Please fill all the field</i>";
  }

 }
?>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
					<form action="index.php" method="post">
							<table style="margin: 0 auto;" border="0" cellspacing="0" cellpadding="5">
								<tr>
									<th><label for="">Email *</label></th>
									<td><input type="email" name="email"></td>
								</tr>
								<tr>
									<th><label for="">Password *</label></th>
									<td><input type="password" name="pass"></td>
								</tr>
								<tr>
									
									<td></td>
									<td><input type="submit" name="submit" value="Login">
										<?php echo @$msg;?>
									</td>
								</tr>
							</table>
							
						</form>
					</div>
				</div>
