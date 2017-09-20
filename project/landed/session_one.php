<?php

session_start();

if(isset($_SESSION['a'])){

	echo $_SESSION['a']++;
}
else{

	$_SESSION['a']=1;
}

?>

<a href="reload.php">Refresh</a>