
<!doctype html>
<html lang="en">
	  <head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	    <title> Hello, world! </title>
		
        <style>
           
            #principal{ 
                position: absolute; 
                height: 200px; 
                clip: rect(0 200px 200px 0)}
			
            #janela { 
                position:relative; 
                height:200px;     
                top: 0; 
                left: 0; 
            }
            #img{float:left;}
            
            #info{
                position: absolute;
                top: 300px;
            }
		</style>
        
        <script src="jquery-1.10.1.min.js"></script>       
        <script>
			
            function moverFotos() {
	            $('#janela').animate({left:"-=200"},1000, function(e){
	               $('#info').html($('#janela').position().left);
                    
                    if($('#janela').position().left== -800){
                       $('#janela').css('left',0)
                    }
                });
			 }
            
            $( function() {
	           setInterval(moverFotos, 200)
			});	
		</script> 		
		
		
	  </head>

	  <body>
	  	<!--MENU -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Sistema PHP </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label=" Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      	<li class="nav-item active"> 
			      		<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
			     	</li>
			     	<li class="nav-item"> <a class="nav-link" href="index.php"> Cadastro </a> </li>
			     	<li class="nav-item"> <a class="nav-link" href="consulta.php"> Consultas </a> </li>
			      	<li class="nav-item"> <a class="nav-link" href="login.php">Login</a> </li>
			      	<li class="nav-item"> <a class="nav-link disabled" href="">Loja</a> </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			     	<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
			     	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar </button>
			    </form>
			</div>
		</nav>
<div id="principal">
            <div id="janela">
                <img src="imagens/foto1.jpg">
                <img src="imagens/foto2.jpg">
                <img src="imagens/foto3.jpg">
                <img src="imagens/foto4.jpg">
                <img src="imagens/foto1.jpg">
            </div>
        </div>
<div id="info"></div>

	<div class="container">
		<div class="col-8 offset-2">
			<fieldset class="formulario form-group">
				<legend> <img src="imagens/avatar.png" alt="Avatar Um" width="100"> </legend>
				<h3 class="text-center mb-5"> Cadastro de Clientes </h3>

					<?php //Exibir a mensagem - se a variavel de  seçao exite
						if (isset($_SESSION['msg'])):
							echo $_SESSION['msg']; //se sim escrever mensagem
							session_unset(); // para limpar a seçao e ficar exibindo a mensgem
						endif
					?>
				<form action="cadastro.php" method="post">
					<div class="form-group row">
						<label for="nome" class="col-sm-2 col-form-label"> Nome </label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="nome" id="nome" maxlength="40" placeholder="Nome do Cliente" required autofocus >
						</div>
					</div>

					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-2 col-form-label"> Email </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="email" id="email" placeholder="Digite seu Email" maxlength="50" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-2 col-form-label"> Telefone </label>
						<div class="col-sm-10">
							<input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Digite Telefone" maxlength="15" required>
						</div>
					</div>
					 
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0"> Opções </legend>
							<div class="col-sm-10">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
									<label class="form-check-label" for="gridRadios1"> Primeira Opção </label>
								</div>
								<div class="form-check disabled">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled">
									<label class="form-check-label" for="gridRadios3"> Opção Desabilitada </label>
								</div>
							</div>
					</div>
					

					<div class="form-group row">
						<div class="col-sm-2"> Confirme </div>
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck1">
								<label class="form-check-label" for="gridCheck1"> Confirme a Opção </label>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary"> Cadastrar </button>
							<button type="reset" class="btn btn-warning"> Limpar </button>
						</div>
					</div>
				</form>
			</fieldset>
		</div>
	</div>
	<!--ARQUIVO JQUERY E JAVASCRIPT -->
	<script type="text/javascript" src="_materialize/js/jquery-3.3.1.min.js"> </script>
	<script type="text/javascript" src="_materialize/js/jmaterialize.min"> </script>

	<!-- INICIALIZAÃ‡AO JQUERY -->
		<script type="text/javascript">
			$(document).ready(function(){

			});
		</script>
</body>
</html>
------------------------------------------------------------------------------------- conexao.php
<?php
	$utf8 = header("Content-Ttype: text/html; charset=utf-8");
	$link = new mysqli('localhost','root','','db_sistemaphp');
	$link -> set_charset('utf8');
?>
--------------------------------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS db_sistemaphp default CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
USE db_sistemaphp;

CREATE TABLE IF NOT EXISTS tb_clientes(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	nome VARCHAR(40) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE,
	telefone VARCHAR(15) NOT NULL
) DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
---------------------------------------------------------------------------------------cadastro.php
<?php
	session_start();
	// variavel de seçao e precisso iniciar o session start

	include_once 'conexao.php';

	$nome =     filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);//pegando os dados do formulario e aplicando filtro e jogando nas variaveis
	$email =    filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

	//VERIFICAR SE O CAMPO EMAIL DO BANCO DE DADOS JA FOI REGISTRADO
	$querySelect = $link->query("select email from tb_clientes");//ENQUANTO HOUVER ALGUM VALOR ASSOCIADO A MINHA QUERY
	//PEGAR EMAILS CADASTRADOS E COLOCAR EM UM ARRAY
	$array_email = []; //criar a variavel armazenadu um array vazio

	//listar com o wile os emails vazios  e jogando dentro do array vazio com oarray push
	while ( $emails = $querySelect -> fetch_assoc()) :// ENTAO ARMAZENE VARIAVEL EMAIL
		$emails_existentes = $emails['email'];
		array_push($array_email, $emails_existentes); //COLODA DENTRO DE UM ARRAY ITEM QUE VEM DE UM BANCO
	endwhile;


	if ( in_array ($email = $email, $array_email)) : //VERIFICAR SE EXIXTE SE NESSE ARRAY EXITE O EMAIL QUE O USER QUER CADDASTRAR
		$_SESSION ['msg'] = "<p class = 'text-center mb-4 text-warning'>".'Já existe um cliente cadastrado com esse email'."</p>";
		header("Location:../");
	else:
		$queryInsert = $link -> query ("insert into tb_clientes values (default, '$nome', '$email', '$telefone')");
		$affected_rows = mysqli_affected_rows($link); //VERIFICAR SE ALGUMA LINHA FOI AFETADA

		if ($affected_rows > 0) :	//SE ALGUMA LINHA FOI AFFETADA NA TABELA
			$_SESSION ['msg'] = "<p class = 'text-center mb-4 text-success'>".'Cadastro realizado com sucesso'."</p>";
			header("Location:../");
		endif;
	endif;

?>
-----------------------------------------------------------------------------------------------delete.php
	<?php 
	include_once 'conexao.php';

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

	$queryDelete = $link->query("delete from tb_clientes where id='$id'");
	
	if (mysqli_affected_rows($link) > 0) ://Falta fazer a confirmação
		header("Location:../consulta.php");
	endif; ?>
------------------------------------------------------------------------------- listar.php
<?php 
	include_once 'conexao.php';

	//vai pegar uma query de colsulta
	$querySelect = $link -> query("select * from tb_clientes"); // seleciona todosos campos e nao tosdos os registros

	while ( $registros = $querySelect -> fetch_assoc())://enqunato a variavel  $registros estiver 
		$id = $registros['id'];
		$nome = $registros['nome'];
		$email = $registros['email'];
		$telefone = $registros['telefone'];

		echo "<tr>";
		echo "<td> $nome </td> 
			<td> $email  </td> 
			<td> $telefone </td> 
			<td> <a href='editar.php?id=$id'> <i class='material-icons'>edit</i> </a> </td>
			<td> <a href='_banco/delete.php?id=$id'> <i class='material-icons'>delete</i> </a> </td>";
		echo "</tr>";
	endwhile;


 ?>
 ----------------------------------------------------	altualizar.php
 <?php 
	session_start();
	include_once 'conexao.php';
	$id = $_SESSION['id'];
		

	$nome =     filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$email =    filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

	$queryUpdate = $link->query("update tb_clientes set nome = '$nome', email = '$email', telefone ='$telefone' 
		where  id='$id'");

	$affected_rows = mysqli_affected_rows($link);

	if ($affected_rows > 0) ://pode dar erro
		header("Location:../consulta.php");
	endif;
	?
