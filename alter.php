<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cafeteria - Cadastrar Cliente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="text/css" href="img/iconCima.png">

	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.1.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">


</head>
<style type="text/css">
	
	::-webkit-scrollbar-thumb {
					height: auto;
					background-color: rgba(139,69,19,1)  ;
					}	
				::-webkit-scrollbar{
					
					width:3px;
					
					}	
				
				::-webkit-scrollbar-button {
					background-color: rgba(255,255,255,1);
					height: 1px;
					
					
					
					}
					
				::-webkit-scrollbar-track-piece {
					background-color: white;
					
					}
					
				
				
				
					
					

	body{
		overflow-x: hidden;

	}

	table tr td,table tr th{
		color: white;
	}
	table tr td{
		font-size: 18pt;
	}
	table tr td span{
		color: rgba(255,255,255,.4);
		font-size: 10pt;

	}
	table tr td input[type="text"], table tr td input[type="email"]{
		width: 100%;
	}
	div.container {
		width: cover;
		border: 1px solid white;
		padding: 8%;
		border-top: none;


		
	
	}

	div.container table {
		margin: auto;
		width: 70%;
	}

	@font-face {
		font-family: Lovelique;
		src: url('fonts/The Perfect Christmas.ttf');
	}
	@font-face {
		font-family: Champagne;
		src: url('fonts/Champagne & Limousines.ttf');
	}
	textarea#textAr {
		transition: .5s;
		
	}
	textarea#textAr:focus {
		background-color: rgba(0,0,0,.7);
		border: solid 2px #ff8c00;
		color: white;
		font-size: 7vh;
	}
	.menu-fixo {
		position: fixed;
		top: 0;
		z-index: 99;
		transition: all .5s;
		background-color: white;
		width:100%;
		border-bottom: 1px solid orange;
	}
	#olhoSenha:hover {
		color: black;
	}
	#olhoSenha{
		transition: .5s;
	}
</style>
<?php 

	include_once 'conexao.php';

	$id = $_GET['id'];

	$consultar = $conn->query("select * from tb_users where id = $id" );
	
	while($dados = $consultar->fetch_assoc()) {
		$id = $dados['id'];
		$nome = $dados['nome'];
		$email = $dados['email'];
		$tel = $dados['tel'];
		$senha = $dados['senha'];
		$data = $dados['data'];
	}

 ?>
<body>


		<nav id="menuHeader" class="navbar navbar-expand-lg navbar-light bg-brown">
			   <img src="img/icon.png" onmouseover="alternaImgIcon()" onmouseout="voltaImgIcon()" class="" id="icone" width="50vh">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			   			 <div class="navbar-nav">
						      <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
						      <a class="nav-item nav-link" href="prod.php">Produtos</a>
						      <a class="nav-item nav-link" href="sobrenos.php">Sobre nós</a>
						     
			    		</div>
			 </div>
		</nav>
		
		<div class="content-fluid center" style="background-image: url('img/coffeWallpaper.jpg'); height: auto; padding-bottom: 10vh; background-attachment: fixed; background-position: 30% 50%">

				<div class="content">
					<form method="post" action="alterar.php?id=<?php echo $id;?>" class="form-group">
						
					<div class="container center">
					<table class="">
						<tr>
							<td colspan="2" align="center" style="font-size: 30pt"><i  class="fas fa-user-edit fa-2x" style="color: white;"></i>Cadastro de Cliente</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><label for="nameTxt">Nome</label></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="text" value="<?php echo $nome; ?>"  id="nameTxt" class="form-control"  name="nomeTxt" required=""><span class="label">Ex: Lucas Azevedo</span></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><label for="fone">Telefone</label></td>
						</tr>
						<tr><td colspan="2" align="center"><input type="text" value="<?php echo $tel; ?>" class=" form-control" id="fone" name="telTxt" required=""><span class="label">Ex: (DD) 90000-0000</span></td></tr>
						<tr>
							<td colspan="2" align="center"><label for="email"><label for="email">Email</label></td>
						</tr>
						<tr><td colspan="2" align="center"><input value="<?php echo $email; ?>" type="email" id="email" class="form-control" name="emailTxt" required=""><span class="label">Ex: lucasazevedo@gmail.com</span></td></tr>
						<tr>
							<td colspan="2" align="center"><label for="email"><label for="senha">Senha</label></td>
						</tr>
						<tr><td colspan="2" align="center"><input value="<?php echo $senha; ?>" type="password" id="senha" class="form-control" name="senhaTxt" required=""><i onmousemove="mostrarSenha()" onmouseout="retirarSenha()"tirarSenha()" class="fas fa-eye" id="olhoSenha"></i><span class="label">&nbsp;&nbsp;Ex: 888975564</span></td></tr>
					
						<tr>	
							<td colspan="2" align="center"><label for="date">Data de Nascimento</label></td>
						</tr>
						<tr><td colspan="2" align="center"><input type="date" value="<?php echo $data; ?>" name="dataTxt"  class="form-control" id="date" required=""><span class="label">Ex: 12/12/2002</span></td></tr>
						<tr>
							<td align="center"><input type="submit" value="Alterar" style="width: 100%;" class="btn btn-success" width="60%" name=""></td><td align="center"><a href="listaDeCadastrados.php" style="width: 100%;"  width="60%" class="btn btn-warning" name="">Cancelar</a>
						</tr>
					</table>
					</div>
				</form>
				</div>
			
		</div>
		<footer class="footer" style="background-color: white; font-family: Champagne; border-top: 1px solid orange; padding-top: 2%;">
				<div style="font-family: Champagne;" class="container">
					<div class="row">
						<div class="col-md-12 center"><h1 style="text-align: center; font-size: 15vh">Redes Sociais</h1></div>
					</div>

					<div class="row">
						<div style="font-family: Champagne;"  class="col-md-4 center"><i class="fab fa-facebook fa-2x" style="color: blue;"></i> /cafeteriaBomSabor</div>
						<div class="col-md-4 center"><i class="fab fa-twitter-square fa-2x" style="color: blue"></i>/@bomSaborCoffee</div>
						<div class="col-md-4 center"><i class="fab fa-instagram fa-2x"></i>/@bomSaborCoffee</div>

						

					</div>
					
				<h3 style="text-align: center; font-size: 15pt; font-weight: bold;">Todos os direitos reservados à Cafeteria Bom Sabor&copy;</h3>
		</footer>

	<script type="text/javascript" src="js/bootstrap4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/jquery.mask.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fone').mask('(00) 00000-0000');
			//$('#date').mask('00/00/0000');
		} );

		
	</script>


	<script type="text/javascript">
		function alternaImgIcon() {
			document.getElementById('icone').src = "img/iconSelect.png";
		}
		function voltaImgIcon() {
			document.getElementById('icone').src = "img/icon.png";
		}


	</script>
	<script type="text/javascript">	
	$(function(){   
		var nav = $('#menuHeader');   
		$(window).scroll(function () { 
			if ($(this).scrollTop() > 150) { 
				nav.addClass("menu-fixo");

			
			} else { 
				nav.removeClass("menu-fixo"); 
				

			} 
		});  
	});
</script>

	<script type="text/javascript">
		function mostrarSenha() {
			document.getElementById('senha').type="text";
		}
		function retirarSenha() {
			document.getElementById('senha').type="password";
		}
	</script>

</body>
</html>