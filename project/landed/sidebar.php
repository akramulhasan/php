<?php

	if($connection->getAll2("categories","*")!= false) {
	    $all_items = $connection->getAll2("categories","*");
	}
?>


								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h2>Categories</h2>
											
											<ul class="sidebar">

										        <?php foreach ($all_items as $item): ?>
										        	<?php extract($item); ?>

											        <?php if($status==1) : 	?>

													<li><a href="archive.php?cat_id=<?php echo $cat_id; ?>"> <?= $name; ?></a></li>
													
												<?php endif ?>
												

												<?php endforeach ?>
											</ul>
										</section>
								