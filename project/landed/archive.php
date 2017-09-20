<?php
include("header.php");


if(isset($_REQUEST['cat_id'])){
	
$get_cat_id = $_REQUEST['cat_id'];


extract($connection->getById("categories","*","cat_id='$get_cat_id'"));

if($connection->getAll2("categories","*")!= false) {

$all_items = $connection->getAllOfSameId("articles","*","cat_id='$get_cat_id'");
}
?>
<div class="wrapper">
	<section class="content">
		
			<h2>All Articles Of Category <i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $name; ?></h2>

			<div class="sidebar archive">
				<?php

				$new=count($all_items);

				if($new>1){
				
					foreach ($all_items as $item) :
				?>


				<div class="archive_content">
					<h2><a href="single.php?art_id=<?php echo $item['art_id'] ?>">
					<?php echo $item['name']; ?></a></h2>
					<?php 
					//store contents
					$all_content = $item['content'];
					//make all contents as array 
					$all_array = explode(" ",$all_content);

					$count_array = count($all_array);

					$selected_array = array_slice($all_array,0,50);

					$add_sliced_array = implode(" ", $selected_array);

					if ($count_array>50){

						echo $add_sliced_array;
					}
					else{
						echo $item['content'];
					}
					?>
					<a class="read-more" href="single.php?art_id=<?php echo $item['art_id'] ?>">Read More...</a>

				</div>
				


				<?php endforeach; }
else{
	echo "No Article Found";
}
				?>
				</div>
	</section>
	<section class="sidebar">
		<?php include('sidebar.php') ?>
	</section>

</div>		
<?php }


?>

<?php include("footer.php") ?>
