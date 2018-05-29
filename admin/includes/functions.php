<?php 
    include "../includes/db.php";
    
    function mostrarCategorias(){
        global $con;  
        $query = "SELECT * FROM categoria";
        $select_todas_categorias = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($select_todas_categorias)){
            $cat_id = $row['cat_id'];
            $cat_nome = $row['cat_nome'];
            echo '<tr>';
            echo "<td>  $cat_id  </td>";
            echo "<td> $cat_nome </td>";
            echo "<td><a href='categorias.php?edit={$cat_id}' title='Editar catedoria'>Editar</a></td>";
            echo "<td><a href='categorias.php?delete={$cat_id}' title='Apagar catedoria'>Apagar</a></td>";
            echo '</tr>';
        }
    }
    function create(){
        global $con;    
        if(isset($_POST['adicionar'])){                            
            $cat_nome = $_POST['cat_nome'];
            $cat_nome = mysqli_real_escape_string($con, $cat_nome);

            if(!$cat_nome == ""){
                $query = "INSERT INTO categoria(cat_nome) VALUES ('$cat_nome')";
                $result = mysqli_query($con,$query);
                // validação
                if(!$result){
                    die('<div class="alert alert-error"> Erro </div>');
                } else {
                    echo '<div class="alert alert-success"> Dados Cadastrados com sucesso!</div>';
                } 
                $cat_nome = ""; 
            } 
        }
    }
    function delete(){
        global $con;    
        if(isset($_GET["delete"])) 
        {
            $cat_id = $_GET['delete'];
            $query = "DELETE FROM categoria WHERE cat_id = $cat_id";
            $result = mysqli_query($con, $query);
            if(!$result){
                die('<div class="alert alert-success">Falha</div>');
            } 
            header('Location: categorias.php');
        }
    }
    function update(){
        global $con;        
        if(isset($_GET['edit'])){
            $cat_id = $_GET['edit'];
            $query = "SELECT * FROM categoria WHERE cat_id  = $cat_id";
            $select_categorias = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($select_categorias)){
                $cat_id = $row['cat_id'];
                $cat_nome = $row['cat_nome'];
                if(isset($cat_nome)) {
                    echo '<div class="form-group"><label for="nome">Editar categoria</label>'; 
                    echo '<input type="text" name="cat_nome" id="" value="' . $cat_nome . '" class="form-control">';
                    echo '</div><div class="form-group">';
                    echo '<input type="submit" name="atualizar" value="ATUALIZAR" id="" class="btn btn-primary"></div>';    
                }
            }
        }
        if(isset($_POST['atualizar'])){
            $edit_cat_nome = $_POST['cat_nome'];
            $query = "UPDATE categoria SET cat_nome = '$edit_cat_nome' WHERE cat_id  = $cat_id";
            $result = mysqli_query($con, $query);
            if(!$result){
                die('<div class="alert alert-success">Falha na atualização</div>');
            } 
            header('Location: categorias.php');
        }
    }
    function mostrarPosts(){
        global $con; 
        $query = "SELECT * FROM posts";
        $select_post = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($select_post)){
            $post_titulo = $row['post_titulo'];
            $post_imagem = $row['post_imagem'];
            $post_data = $row['post_data'];
            $post_autor = $row['post_autor'];
            $post_conteudo = $row['post_conteudo'];
            $post_data = date('d-m-Y', strtotime($post_data));    
            echo '<tr><td style="white-space: nowrap">' . $post_data .'</td>';
            echo '<td>' . $post_titulo .'</td>';    
            echo '<td>' . $post_autor .'</td>';    
            echo '<td><img src="../images/' . $post_imagem .'" alt="" class="img-responsive"></td>';     
            echo '<td>' . $post_conteudo .'</td></tr>';  
        }
    }
    function mostrarUsers(){
        global $con; 
        $query = "SELECT * FROM usuario";
        $select_users = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($select_users)){
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_role = $row['user_role'];
            $user_nome = $row['user_nome'];
  
            echo '<tr><td style="white-space: nowrap">' . $user_id .'</td>';
            echo '<td>' . $username .'</td>';    
            echo '<td>' . $user_role .'</td>';       
            echo '<td>' . $user_nome .'</td></tr>';  
        }
    }
    function addUsers(){
        global $con; 
        if(isset($_POST['adicionar'])){
            $username = $_POST['username'];
            $user_password = $_POST['user_password'];
            $user_role = $_POST['user_role'];
            $user_nome = $_POST['user_nome'];

            $query = "INSERT INTO usuario(username, user_password, user_role, user_nome) VALUES ('$username','$user_password','$user_role', '$user_nome')";
            $add_user = mysqli_query($con,$query);
            if(!$add_user){
                die('<div class="alert alert-error"> Erro </div>');
            } else {
                echo '<div class="alert alert-success">Post adicionado com sucesso!</div>';
            } 
            $username = "";
            $user_password = "";
            $user_role = "";
            $user_nome = "";

        }
    }
?>