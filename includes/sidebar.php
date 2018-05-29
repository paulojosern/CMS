<div class="col-md-4">
    <!-- login -->
    <div class="well">
        <h4>Login</h4>
        <form action="includes/login.php" method="post">
            <?php if(isset($_SESSION['loginErro'])){
                  echo $_SESSION['loginErro'];
                  unset($_SESSION['loginErro']);
            }?>
            <div class="form-group">
                <input type="text" name="usarname" id="" class="form-control" placeholder="Usuário">
            </div>
            <div class="form-group">
                <input type="password" name="password" id="" class="form-control" placeholder="Sua senha">
            </div>
            <span class="input-group-btn">
                <button class="btn btn-primary" name="login" type="submit">Entrar</button>
            </span>
        </form>
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-2">
                <ul class="list-unstyled">
                    <?php
                        $query = "SELECT * FROM categoria";
                        $select_todas_categorias = mysqli_query($con,$query);
                        while($row = mysqli_fetch_assoc($select_todas_categorias)){
                            $cat_nome = $row['cat_nome'];
                            echo '<li><a href="#">' . $cat_nome . '</a></li>';
                        }
                    ?>
                </ul>
            </div>

        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

</div>