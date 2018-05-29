<?php  ob_start() ?>
<?php 
    include "includes/admin-header.php"; 
?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin-navigation.php"; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             Categorias
                            <small>Paulo Reis</small>
                        </h1>
                        <div class="col-sm-6">
                        <?php
                            create();
                            delete();
                        ?> 
                            <form action="categorias.php" method="post">
                                <div class="form-group">
                                    <label for="nome">Adicionar categoria</label>
                                    <input type="text" name="cat_nome" id="nome" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="adicionar" value="ADICIONAR" id="" class="btn btn-primary">
                                </div>
                            </form>
                            <!-- UPDATE -->
                            <hr>
                            <?php include "includes/editar_categoria.php"; ?>
                        </div>
                        <div class="col-sm-6">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Categoria</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        mostrarCategorias();
                                    ?>
                                </tbody>
                            </table>    
                        
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/admin-footer.php"; ?>
