<style>
	.container table {
	  margin: 0 auto;
	}
</style>
<?php include("crud.php");


if(isset($_REQUEST['submit'])){
	extract($_REQUEST);

	if(!empty($f_name && $l_name && $email && $pass)){

		if($connection->EmailExist("users","*","email='$email'")){

			$msg = "<i style='color:#B74554;display:block'>$email already exist!</i>";
		}else{

	$encripted_pass = sha1($pass); // to encript password

	if($connection->Insert("users","first_name='$f_name',last_name='$l_name',email='$email',password='$encripted_pass'")){

		header("Location: reg_suc.php");
	}
	else{
		
		echo "<i style='color:red;'>Something goes wrong!</i>";
	}
		} // ENd of condition of emailExist


}else{

	$msg = "<i style='color:#B74554;display:block'>Please fill all the field</i>";
}

}
?>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<form action="register.php" method="post">
							<table style="" border="0" cellspacing="0" cellpadding="5">
								<tr>
									<th><label for="">First Name *</label></th>
									<td><input type="text" name="f_name"></td>
								</tr>
								<tr>
									<th><label for="">Last Name *</label></th>
									<td><input type="text" name="l_name"></td>
								</tr>
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
									<td><input style="" type="submit" name="submit" value="Signup">	
									</td>
								</tr>
								<tr>
									<td></td>
									<td><?php echo @$msg;?></td>
								</tr>
							</table>
							
						</form>
					</div>
				</div>
