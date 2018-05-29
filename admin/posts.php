<?php  ob_start() ?>
<?php  include "includes/admin-header.php"; ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin-navigation.php"; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Posts
                            <small>/ Ver todos os posts</small>
                        </h1>
                    </div>
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Titulo</th>
                                    <th>Autor</th>
                                    <th>Imagem</th>
                                    <th>Conteúdo</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php mostrarPosts(); ?>
                            </tbody>
                        </table>    

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/admin-footer.php"; ?>
