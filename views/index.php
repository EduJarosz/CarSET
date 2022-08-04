<?php
include_once '../models/login.php';
include_once '../models/PatioDao.php';



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

<html !DOCTYPE>
	<title>CarSet</title>
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
	            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right w3-green" onclick="w3_open()"><img src="imagem/icon.png"></a>
	        </header>

	        <!-- Overlay effect when opening sidebar on small screens -->
	        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

	        <!-- !PAGE CONTENT! -->
	        <div class="w3-main" style="margin-left:270px">

	            <!-- Push down content on small screens -->
	            <div class="w3-hide-large" style="margin-top:83px"></div>

	            <!-- Top header -->
	            <header class="w3-container w3-deep-orange">
	              <h3 class="w3-left w3-deep-orange">Patio</h3>
                  <p class="w3-right">
                      <i class="fa fa-shopping-cart w3-margin-right"></i>
                      <i class="fa fa-search"></i>
                  </p>

	            </header>


	

					<table class="w3-table-all">
						<thead>
							<tr class="w3-deep-orange">
								
								<th>Vaga</th>
								<th>Placa</th>
								<th>Hora de entrada</th>
								<th>Entrada</th>
								<th>Saida</th>
							</tr>
						</thead>
						<tbody>
							<?php 


							$patio = new PatioDao();
							$vagas = $patio->listar();

								
								foreach($vagas as $vaga): ?>
									<tr>
										
										<td><?php echo $vaga->getVagnumero(); ?> </td>

										<td><?php echo $vaga->getVeiplaca(); ?></td>

										<td><?php echo $vaga->getEnthora(); ?> </td>

										

										<td><a href="entrada_off.php?vagaId=<?php echo $vaga->getVagnumero(); ?>" class="w3-bar-item w3-button w3-hover-black w3-deep-orange w3-border w3-border-black">Entrada</a></td>
										<td><a href="saida_off.php?vagaId=<?php echo $vaga->getVagnumero(); ?>" class="w3-bar-item w3-button w3-hover-black w3-deep-orange w3-border w3-border-black">Saida</a></td>
									</tr>    
								<?php endforeach; ?>
						</tbody>
					</table>


						
        						







	     	<!-- Footer -->
        <footer class="w3-padding-64 w3-small" id="footer">
            <div class="w3-row-padding">
            </div>
        </footer>

        <div class="w3-white w3-center w3-padding-24">
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