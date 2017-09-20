<?php
include('crud.php');

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Project | Landed</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/my-css.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Landed</a></h1>
					<nav id="nav">

                    <?php
                    if($connection->getAll2("menus","*")!= false) {

                        $all_menus = $connection->getAll2("menus","*");


                    }
                    ?>

                    <ul>
						<li><a href="index.php">Home</a></li>

		                    <?php foreach ($all_menus as $menu): ?>
		                    	<?php extract($menu); ?>

		                    <?php if($status==1) : 	?>

						<li class=""><a href="index.php?menu_id=<?= $id; ?>"><?= $name; ?></a></li>
							
							<?php endif ?>
						

                    <?php endforeach ?>
                   </ul>

					</nav>
				</header>