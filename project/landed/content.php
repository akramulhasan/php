
<section id="content">
<?php



	if(isset($_REQUEST['menu_id'])){
		$menu_id = $_REQUEST['menu_id'];

		extract($connection->getById("menus","*","id='$menu_id'"));

		echo "<h2>$name</h2>";
		echo $content;
	}
	else{
		
		header('location:homepage.php');
	}


?>
	
	 


</section>