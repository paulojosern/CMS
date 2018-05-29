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
                            Usuários
                            <small>/ Ver todos os usuários</small>
                        </h1>
                    </div>
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Permissão</th>
                                    <th>Nome</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php mostrarUsers(); ?>
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
