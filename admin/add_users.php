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
                            <small>/ Adicionar novo usuário</small>
                        </h1>
                    </div>
                    <div class="col-sm-12"> 
                        <?php
                            addUsers();
                        ?>
                        <form action="" method="post" class="row">
                            <div class="form-group col-sm-3">
                                <label for="username">Usuário</label>
                                <input type="text" name="username" id="" class="form-control">
                            </div>
                            <div class="form-group  col-sm-3">
                                <label for="user_password">Senha do usuário</label>
                                <input type="password" name="user_password" id="" class="form-control">
                            </div>
                            <div class="form-group  col-sm-3">
                                <label for="user_role">Permissão</label>
                                <input type="text" name="user_role" id="" class="form-control">
                            </div>
                            <div class="form-group  col-sm-3">
                                <label for="user_nome">Nome</label>
                                <input type="text" name="user_nome" id="" class="form-control">
                            </div>
                            <div class="form-group col-sm-12">
                                <input type="submit" value="ADICIONAR" name="adicionar" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/admin-footer.php"; ?>
