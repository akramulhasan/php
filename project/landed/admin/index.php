<?php
include('crud.php');

?>
            <?php include('admin_header.php');
                    include('admin_sidebar.php'); ?>
        
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Welcome to My Admin</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            <div class="container-fluid">
                <div class="row">
                <h4 class="page-title">Manage Menu Items</h4>                   
                    <?php
                    if($connection->getAll2("menus","*")!= false) {

                        $all_menus = $connection->getAll2("menus","*");


                    }
                    ?>
                <table border="1" style="width:700px" cellpadding="5" cellspacing="0" class="table table-bordered table-hover table-stripped table-condensed">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
        <?php
            foreach ($all_menus as $menu) {
                extract($menu);
         
        ?>
                        <tr>
                            <td><?php echo $name;  ?></td>
                            <td><?php echo substr($content,0,20);  ?>...</td>
                            <td><?=$status==0?"Unpublished":"Published"; ?></td>
                            <td class="text-right"><a href="#" class="btn btn-info glyphicon glyphicon-eye-open"></a> &nbsp;&nbsp; <a href="#" class="
                            btn btn-primary glyphicon glyphicon-pencil"> </a>&nbsp;&nbsp; <a href="#" class="btn btn-danger glyphicon glyphicon-trash"> </a> </td>
                        </tr>

                        <?php } ?>
                        <tr>
                            <td colspan="4" class="text-right"><a href="insert_menu.php" class="btn btn-primary">Add New Menu</a></td>
                        </tr>
                </table>


                </div>
            </div>  

<!-- Manage categories  -->

            <div class="container-fluid">
                <div class="row">
                <h4 class="page-title">Manage Categories</h4>                   
                    <?php
                    if($connection->getAll2("categories","*")!= false) {

                        $all_cats = $connection->getAll2("categories","*");


                    }
                    ?>
                <table border="1" style="width:700px" cellpadding="5" cellspacing="0" class="table table-bordered table-hover table-stripped table-condensed">
                    <thead>
                        <tr>
                            <th>Cat ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
        <?php
            foreach ($all_cats as $cat) {
                extract($cat);
         
        ?>
                        <tr>
                            <td><?php echo $cat_id; ?></td>
                            <td><?php echo $name  ?> </td>
                            <td><?=$status==0?"Unpublished":"Published"; ?></td>
                            <td class="text-right"><a href="#" class="btn btn-info glyphicon glyphicon-eye-open"></a> &nbsp;&nbsp; <a href="#" class="
                            btn btn-primary glyphicon glyphicon-pencil"> </a>&nbsp;&nbsp; <a href="#" class="btn btn-danger glyphicon glyphicon-trash"> </a> </td>
                        </tr>

                        <?php } ?>
                        <tr>
                            <td colspan="4" class="text-right"><a href="insert_cat.php" class="btn btn-primary">Add New Category</a></td>
                        </tr>
                </table>


                </div>
            </div> 

<!-- Manage Articles  -->

            <div class="container-fluid">
                <div class="row">
                <h4 class="page-title">Manage Articles</h4>                   
                    <?php
                    if($connection->getAll2("articles","*")!= false) {

                        $all_arts = $connection->getAll2("articles","*");


                    }
                    ?>
                <table border="1" style="width:900px" cellpadding="5" cellspacing="0" class="table table-bordered table-hover table-stripped table-condensed">
                    <thead>
                        <tr>
                            <th>Article ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Category ID</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
        <?php
            foreach ($all_arts as $article) {
                extract($article);
         
        ?>
                        <tr>
                            <td><?php echo $art_id; ?></td>
                            <td><?php echo $name  ?> </td>
                            <td><?php echo substr($content,0,20);  ?>... </td>
                            <td><?php echo $all_cats['name'];  ?></td>
                            <td><?=$status==0?"Unpublished":"Published"; ?></td>
                            <td class="text-right"><a href="#" class="btn btn-info glyphicon glyphicon-eye-open"></a> &nbsp;&nbsp; <a href="#" class="
                            btn btn-primary glyphicon glyphicon-pencil"> </a>&nbsp;&nbsp; <a href="#" class="btn btn-danger glyphicon glyphicon-trash"> </a> </td>
                        </tr>

                        <?php } ?>
                        <tr>
                            <td colspan="6" class="text-right"><a href="insert_article.php" class="btn btn-primary">Add New Article</a></td>
                        </tr>
                </table>


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
    <script src="https://cdn.ckeditor.com/ckeditor5-build-classic/0.11.0/build/ckeditor.js"></script>


</body>

</html>
