<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/head.php'; ?>
</head>

<body>

<?php
    session_start();

    include 'includes/navbar.php';
    include 'includes/modal_contato.php';
    include 'includes/modal_login.php';
    include 'includes/modal_recuperar_senha.php';
    include 'CRUD_company.php';
    
    $total = mysqli_fetch_array(SelectTotalCompany());
?>


	<section class="wave">
		<div class="container-fluid" id="intro">
			<div class="row">
				<div class="col-sm-12 centered-col">
					<span id="titulo">Sistema SOLARI</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 centered-col">
					<h2 id="subtitulo">O sistema caicara que vai revolucionar o seu estoque ;)</h2>
				</div>
			</div>
		</div>
	</section>
	
	<section class="beneficios">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xs-12 centered-col">
				<h1 id="titulo-beneficios" class="hidden">NÓS OFERECEMOS</h1>
			</div>
		</div>
		<div class="row" id="beneficios">

		
			<div class="col-sm-4 centered-col">
				<img src="res/img/homem_sentado.png" class="hidden" id="ben1"  height="350" width="250">
			</div>
			<div class="col-sm-6">
				<h2 class="hidden" id="txt-ben1">GRANDE ESPAÇO DE ARMAZENAMENTO</h2>

				<p class="hidden" id="txt-ben12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p class="hidden" id="txt-ben13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			
		</div>


		<div class="row" id="beneficios">
			<div class="col-sm-4 centered-col">
				<img src="res/img/homem_correndo.png" class="hidden" id="ben2"  height="300" width="250">
			</div>
			<div class="col-sm-6" >
				<h2 class="hidden" id="txt-ben2">ALTA TAXA DE TRANSFERÊNCIA</h2>

				<p class="hidden" id="txt-ben22">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p class="hidden" id="txt-ben23">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

		<div class="row" id="beneficios">
			<div class="col-sm-4 centered-col">
				<img src="res/img/mulher_prancha.png" class="hidden" id="ben3"  height="300" width="250">
			</div>
			<div class="col-sm-6"  class="hidden">
				<h2 class="hidden" id="txt-ben3">PORTABILIDADE</h2>

				<p class="hidden" id="txt-ben32">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p class="hidden" id="txt-ben33">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>	
	</div>	
	</div>
	</section>

	<section class="contato">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 centered-col">
					<h2 id="txt-capa"><span style="color: #FFD460;"><?php if($total[0] < 10){echo 0 . $total[0];}else{echo $total[0];}?></span> grandes empresas já usam o nosso serviço!</h2>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="img-capa col-sm-3 centered-col"><img style="opacity: 0.8;" width="150" heigth="150" src="res/img/praiamar-logo.png"></div>
				<div class="img-capa col-sm-3 centered-col"><img style="opacity: 0.8;" width="150" heigth="150" src="res/img/outback-logo.png"></div>
				<div class="img-capa col-sm-3 centered-col"><img style="opacity: 0.8;" width="150" heigth="150" src="res/img/bomprato-logo.png"></div>
				<div class="img-capa col-sm-3 centered-col"><img style="opacity: 0.8;" width="150" heigth="150" src="res/img/mcdonalds-logo.png"></div>
			</div>
			<br><br><br>

			<div class="row">
                <div class="col-md-12">
                <?php if(!isset($_SESSION['cnpj'])){?>
				    <a href="cadastro_empresa.php"><button type="button"  class="btn btn-deep-orange waves-effect col-sm-12 centered-col animated pulse infinite" style="font-size: 125%">Gostou? Que tal começar agora? <i style = "bottom: 2px;" class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
				<?php }else{ ?>
                    <a href="home_empresa.php"><button type="button"  class="btn btn-deep-orange waves-effect col-sm-12 centered-col animated pulse infinite" style="font-size: 125%">Cadastre seu próprio estoque agora mesmo! <i style = "bottom: 2px;" class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                <?php } ?>
			</div>
        </div>
			<br><br><br>
		</div>
	</section>

<?php include("includes/footer.php"); ?>
</body>
</html>
