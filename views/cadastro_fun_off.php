<?php
require_once '../models/login.php';
if (!isset($_SESSION)) {
    session_start();
}

$login = new Login();

if ($login->verificaLogin()) {
    $logado = $_SESSION['usuario'];
} else {
   $login->sair();
   header("location:../controllers/loginController.php?botao=sair");
}
?>
<!DOCTYPE html>
<html>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../skin/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" type="text/css" href="../skin/css/customizado.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



    <body class="w3-content" style="max-width:100%">

            <!--menu lateral -->
            <nav class="w3-sidebar w3-bar-block w3-light-blue w3-collapse w3-top" style="z-index:3;width:270px" id="mySidebar" >
                <div class="w3-container w3-display-container w3-padding-16">
                    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
                    <h2 class="w3-wide w3-text-green"><b><img src="../views/imagem/logo.png" width="200px" height="100px"></b></h2>
                </div>
                <div class="w3-padding-64 w3-large w3-text-black" style="font-weight:bold">
                   
                    <a href="index.php" class="w3-bar-item w3-button w3-hover-black w3-deep-orange w3-border w3-border-black">Patio</a>
                    <a href="planos_off.php" class="w3-bar-item w3-button w3-hover-black w3-deep-orange w3-border w3-border-black">Planos</a>
                    <a href="cadastro_fun_off.php" class="w3-bar-item w3-button w3-hover-black w3-deep-orange w3-border w3-border-black">Cadastro Funcionario</a>
                    <a href="relatorio_caixa_off.php" class="w3-button w3-block w3-left-align w3-hover-black w3-deep-orange w3-border w3-border-black" id="myBtn2"> Relatorio de caixa </a>
                    <a href="relatorio_patio_off.php" class="w3-button w3-block w3-left-align w3-hover-black w3-deep-orange w3-border w3-border-black" id="myBtn2"> Relatorio de patio </a>
                    <a href="../controllers/loginController.php?botao=sair" class="w3-bar-item w3-button w3-hover-black w3-deep-orange w3-border w3-border-black">Sair</a>    
                </div>
               
            </nav>


        <!-- Top menu on small screens -->
        <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
            <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
        </header>

        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:270px">

            <!-- Push down content on small screens -->
            <div class="w3-hide-large" style="margin-top:83px"></div>

            <!-- Top header -->
            <header class="w3-container w3-deep-orange">
                <h3 class="w3-left w3-deep-orange">Cadastro Funcionário</h3>
                <p class="w3-right">
                    <i class="fa fa-shopping-cart w3-margin-right"></i>
                    <i class="fa fa-search"></i>
                </p>
            </header>

            <!-- Cadastro -->
            
                <form id="func" method="POST" action="../controllers/funcionarioController.php">

                    <div class="cadastro-new">
                            
                            <label>Nome Completo:</label>
                            <input class="w3-input w3-border" type="text" name="nome" />
                            
                            <span>Sexo:</span>
                            <span><input type="radio" name="sexo" value="m" />Masculino</span> 
                            <span><input type="radio" name="sexo" value="f" />Feminino</span>
                            
                          
                            <label>Data de Nascimento:</label>
                            <input class="w3-input w3-border" type="date" name="dtn" />
                           
                            <label>RG:</label>
                            <input class="w3-input w3-border" type="text" name="rg" />
                            
                            <label>CPF:</label>
                            <input class="w3-input w3-border" type="text" name="cpf" />

                            <label>Cargo:</label>
                            <input class="w3-input w3-border" type="text" name="cargo" />
                    
                        <input type="submit" name="Salvar" value="Salvar" class="w3-button w3-deep-orange">
                        <input type="reset" name="Limpar" value="Limpar" class="w3-button w3-deep-orange">
                    </div>
                </form>
        </div>


        </div>
        <!-- fim cadastro -->


        <!-- Footer -->
        <footer class="w3-padding-64 w3-small" id="footer">
            <div class="w3-row-padding">
            </div>
        </footer>

        <div class="w3-deep-orange w3-center w3-padding-24"> <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"> </a>
        </div>

        <!-- End page content -->
        </div>


        <script>
            // Accordion 
            function myAccFunc() {
                var x = document.getElementById("demoAcc");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }

            // Click on the "Jeans" link on page load to open the accordion for demo purposes
            document.getElementById("myBtn").click();


            // Script to open and close sidebar
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>

    </body>

</html>