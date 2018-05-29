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
                            <small>/ Adicionar novo post</small>
                        </h1>
                    </div>
                    <div class="col-sm-12"> 
                        <?php
                            global $con; 
                            if(isset($_POST['adicionar'])){
                                $post_titulo = $_POST['post_titulo'];
                                $post_autor = $_POST['post_autor'];
                                $post_imagem = $_FILES['post_imagem']['name'];
                                $post_imagem_temp = $_FILES['post_imagem']['tmp_name'];
                                $path = '../images/';
                                move_uploaded_file($post_imagem_temp, $path . $post_imagem);

                                $post_data = date('d-m-y');

                                $post_conteudo = $_POST['post_conteudo'];

                                $query = "INSERT INTO posts(post_titulo, post_autor, post_imagem, post_data, post_conteudo) VALUES ('$post_titulo','$post_autor','$post_imagem', now(), '$post_conteudo')";
                                $add_post = mysqli_query($con,$query);
                                if(!$add_post){
                                    die('<div class="alert alert-error"> Erro </div>');
                                } else {
                                    echo '<div class="alert alert-success">Post adicionado com sucesso!</div>';
                                } 
                                $post_titulo = "";
                                $post_autor = "";
                                $post_conteudo = "";


                                
                            }
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="post_titulo">Titulo do post</label>
                                <input type="text" name="post_titulo" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="post_autor">Autor do post</label>
                                <input type="text" name="post_autor" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="post_imagem">Imagem do post</label>
                                <input type="file" name="post_imagem" id="">
                            </div>
                            <div class="form-group">
                                <label for="post_conteudo">Conteúdo do post</label>
                                <textarea name="post_conteudo" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
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
