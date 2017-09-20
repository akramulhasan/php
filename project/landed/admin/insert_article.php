<?php
include('crud.php');
if(isset($_REQUEST['insert'])){
	
	extract($_REQUEST);
	

		if($connection->Insert("articles","name='$name',content='$content',cat_id='$cat_id',status='$status'")){
			
			header("Location:index.php");
		}
		else{
			$msg="Insert Fail";
		}
}

?>
            <?php include('admin_header.php');
                    include('admin_sidebar.php'); ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Inseart Article</h4>
                    </div>
                </div>

<!-- Manage categories  -->

            <div class="container-fluid">
                <div class="row">
                <h4 class="page-title">Add Article</h4>                   

				<form action="insert_article.php" method="post">
					<table style="width:600px; margin:0 auto" class="table table-bordered table-hover table-stripped table-condensed" border="1" cellpadding="5" cellspacing="0">

						<tr>
							<th>Name</th>
							<td><input type="text" class="form-control" name="name" size="30"></td>
						</tr>

						<tr>
							<th>Content</th>
							<td>
			            <textarea name="content" id="content" rows="10" cols="80">
                
            			</textarea>
							</td>
						</tr>
						<tr>
							<th>Category</th>
							<td>
				<?php
				// Calling all categories
					if($connection->getAll2("categories","*")!= false) {
					    $all_items = $connection->getAll2("categories","*");
					}
				?>

						<select name="cat_id" id="">
					        <?php foreach ($all_items as $item): ?>
					        	<?php extract($item); ?>

								 <option value="<?= $cat_id; ?>"><?= $name; ?></option>
						
							<?php endforeach ?>
						
                                   
						</select>
							</td>
						</tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <select name="status" id="">
                                    <option value="1">Publish</option>
                                    <option value="0">Unpublish</option>
                                </select>
                            </td>
                        </tr>
						<tr>
							<td colspan="2" class="text-center"><input type="submit" class="btn btn-primary" name="insert" value="Add New Article"></td>
							
						</tr>

					</table>
					</form>


                </div>
            </div> 
            </div>
          
        </div>
        <footer class="footer text-center"> 2017 &copy; Myadmin brought to you by wrappixel.com </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="js/jquery.nicescroll.js"></script>
    <!--Morris JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/myadmin.js"></script>
    <script src="js/dashboard1.js"></script>

    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>
</body>

</html>
