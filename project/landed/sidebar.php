<?php
//call all categories from database
	if($connection->getAll2("categories","*")!= false) {
	    $all_items = $connection->getAll2("categories","*");
	}

//call all articles from database
	if($connection->getAll2("articles","*")!= false) {
	    $all_articles = $connection->getAll2("articles","*");
	}

//Call all latest data from article
	if($connection->getLatest("articles","*","0,3")!= false) {
	    $latest_articles = $connection->getLatest("articles","*","0,3");
	}
?>


								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h2>Recent Articles</h2>
											
											<ul class="sidebar">

										        <?php foreach ($latest_articles as $item): ?>
										        	<?php extract($item); ?>

											        <?php if($status==1) : 	?>

													<li><a href="single.php?art_id=<?php echo $item['art_id'] ?>"> <?= $name; ?></a></li>
													
												<?php endif ?>
												

												<?php endforeach ?>
											</ul>
										</section>
										<section>
											<h2>All Articles</h2>
											
											<ul class="sidebar">

										        <?php foreach ($all_articles as $item): ?>
										        	<?php extract($item); ?>

											        <?php if($status==1) : 	?>

													<li><a href="single.php?art_id=<?php echo $item['art_id'] ?>"> <?= $name; ?></a></li>
													
												<?php endif ?>
												

												<?php endforeach ?>
											</ul>
										</section>
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
