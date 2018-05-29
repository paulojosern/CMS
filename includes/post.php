<!-- First Blog Post -->
<?php
    $query = "SELECT * FROM posts";
    $select_post = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($select_post)){
        $post_titulo = $row['post_titulo'];
        $post_imagem = $row['post_imagem'];
        $post_data = $row['post_data'];
        $post_autor = $row['post_autor'];
        $post_conteudo = $row['post_conteudo'];
        $post_data = date('d-m-Y', strtotime($post_data));

        echo '<h2><a href="#">' . $post_titulo . '</a></h2>';
        echo '<p class="lead">Por <a href="index.php">' . $post_autor . '</a></p>';
        echo '<p><span class="glyphicon glyphicon-time"></span> ' . $post_data . '</p>';
        echo '<hr>';
        echo '<img class="img-responsive" src="images/' . $post_imagem . '" alt="' . $post_imagem . '">';
        echo '<hr>';
        echo '<p>' . $post_conteudo . '</p>';
        echo '<a class="btn btn-primary" href="#">Continuar lendo <span class="glyphicon glyphicon-chevron-right"></span></a>';
        echo '<hr>';      
    }
?>