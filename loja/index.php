<?php 
$pageTitle="Welcome! Login"; 
require_once 'header.php';
require_once 'verifica-sessao.php';
$logado = usuarioEstaLogado();
?>
    <div class="row">
    <div class="col-md-8">
        <h1>Welcome!</h1>

        <?php 
           // if(isset($_GET["login"])&& $_GET["login"]==true){
            if($logado) {
        ?>
            <p class="alert-success">Usuário <strong><?= $_SESSION["usuario_logado"] ?></strong> logado com sucesso!</p>
        <?php 
            } // else if (isset($_GET["login"]) && $_GET["login"]==false){
            else {
        ?>
            <h3>Login</h3>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="userLogin">Usuário:</label>
                    <input type="text" class="form-control" id="userLogin" name="login" placeholder="usuário ex:joao">
                </div>
                <div class="form-group">
                    <label for="userPassword">Senha:</label>
                    <input type="password" class="form-control" id="userPassword" name="senha" placeholder="Informe sua senha ****">
                </div>
                <input type="submit" value="Login" class="btn btn-primary">
            </form>
        <?php 
            }

            if(isset($_GET["sempermissao"])) {
        ?>
            <p class="alert-danger">Acesso negado!</p>
        <?php 
            }
            if(isset($_GET["logout"])){
        ?>
        <p class="alert-success">Sessão encerrado com sucesso</p>
        <?php } ?>
    </div>
</div>
<?php include 'footer.php' ?>