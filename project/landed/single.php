<?php
include("header.php");


if(isset($_REQUEST['art_id'])){
	
$get_art_id = $_REQUEST['art_id'];


extract($connection->getById("articles","*","art_id='$get_art_id'"));


?>
<div class="wrapper">
	<section class="content">
			<h2> <?= $name; ?></h2>
			<?= $content; ?>
	</section>
	<section class="sidebar">
		<?php include('sidebar.php') ?>
	</section>	
</div>	
<?php }


?>

<?php include("footer.php") ?>
