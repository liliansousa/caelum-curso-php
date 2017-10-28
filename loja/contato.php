<?php 
    $pageTitle="Loja: Cadastro de produto"; 
    require_once ('header.php');
?>
    <div class="row">
        <div class="col-md-8">
            <h3>Contato:</h3><br>
            <form action="envia-email.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail para retorno do contato">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="5"></textarea>
                </div>
                <button>Enviar</button>
            </form>
        </div>
    </div>
<?php 
    require_once ('footer.php');
?>