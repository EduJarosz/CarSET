<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" >
        <title>Formulário</title>
        <link rel="stylesheet" type="text/css" href="skin/css/longin.css" >
    </head>
    <body>
        <h1>Cadastro</h1>
        <?php if (!empty($_SESSION['erro'])) { ?>

            <div class="resp">

                <p><?php echo $_SESSION['erro'] ?> </p>


            </div>
        <?php } ?>
        <form id='cadastrar' method="POST" action="controllers/usuariosController.php" >
            <fieldset> <legend>Cadastro</legend>
                <label>Nome:</label>
                <input id="nome" type="text" name="nome" />

                <label>Usuário:</label>
                <input id="usuario" type="text" name="user" />

                <label> Senha:</label>
                <input type="password" id='senha' name="senha" />
            
                <label> Contato:</label>
                <input type="text" id='contato' name="contato" />

                <label> Sexo:</label>
                <span><input type="radio" name="sexo" value="m" checked="m" />Masculino</span> 
                <span><input type="radio" name="sexo" value="f" />Feminino</span>

                <label> Data de nascimento:</label>
                <input type="date" id='dtn' name="dtn" />

                <label> Cpf:</label>
                <input type="cpf" id='senha' name="cpf" />

                <input class="botao" type="submit" name="botao" value="Salvar"/>
                

            </fieldset>
        </form>
        
    </body>
</html>