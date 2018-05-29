<?php 
    include "includes/db.php"; 
    include "includes/header.php";
    //Navigation 
    include "includes/navigation.php";
    session_start();
?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
                <?php include "includes/post.php"; ?>
                

            </div>
            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>
        <!-- Footer -->
        <?php include "includes/footer.php"; ?>

