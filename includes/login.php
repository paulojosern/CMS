<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
    if(isset($_POST['login'])){
        $username = $_POST['usarname'];
        $password = $_POST['password'];
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con,$password);

        $query = "SELECT * FROM usuario WHERE username = '$username'";
        $select_usuario = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($select_usuario)){
            $db_id = $row['user_id'];
            $db_user = $row['username'];
            $db_password = $row['user_password'];
            $db_role = $row['user_role'];
            $db_nome = $row['user_nome'];
        }
        if($username !== $db_user && $password !== $db_password){
            $_SESSION['loginErro'] = "<div class='msg'>Usuário ou senha Inválido</div>";
            header('Location: ../index.php');
        }elseif($username == $db_user && $password == $db_password){
            $_SESSION['username'] = $db_user;
            $_SESSION['password'] = $db_password;
            $_SESSION['role'] = $db_role;
            $_SESSION['nome'] = $db_nome;
            header('Location: ../admin');
        }else{
            header('Location: ../index.php');
        }
    }
?>