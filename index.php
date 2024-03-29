<?php 
	if(!isset($_SESSION)) { session_start(); }
	$_SESSION['cd_usuario'] = null;

	if(!empty($_SESSION)) { 
		session_destroy();
	} 
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<title>Construindo Site | Sua presença on-line</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="_assets/css/main.css"/>
		<noscript><link rel="stylesheet" href="_assets/css/noscript.css"/></noscript>
	</head>
	<body class="landing is-preload">

		<div id="page-wrapper">

			<header id="header" class="alt">
				<h1><a href="index.php">Construindo Site</a></h1>
			</header>

			<section id="banner">
				<div class="inner">
					<h2>Construindo Site</h2>
					<p>Construa seu próprio site de forma<br />simples, rápida e prática.<br/><br/>Divulgue seus serviços!<a href="#"></a>!</p>
					<ul class="actions special">
						<li><a data-toggle="modal" data-target="#cadastrar" class="button primary">Crie seu site!</a></li>
						<li><a data-toggle="modal" data-target="#login" class="button fit">Entrar</a></li>
					</ul>
				</div>
				<a href="#one" class="more scrolly">Saiba mais...</a>
			</section>

			<section id="one" class="wrapper alt style2">
				<section class="spotlight">
					<div class="image"><img src="_images/plataforma.jpg" alt="" /></div><div class="content">
						<h2>Somos uma plataforma de construção de sites</h2>
						<p>Com a nossa plataforma você poderá criar o seu próprio site e divulgar o seu negócio na internet. O Construindo Site oferece ferramentas intuitivas e objetivas, facilitando ao máximo a criação do seu site sem a necessidade de conhecimentos técnicos na área de programação.</p>
					</div>
				</section>
				<section class="spotlight">
					<div class="image"><img src="_images/templates.jpg" alt="" /></div><div class="content">
						<h2>Seu site, Do seu jeito!</h2>
						<p>Com poucos cliques você poderá adicionar textos e imagens ao seu site, deixando-o do seu jeito, com a personalidade do neu negócio.</p>
					</div>
				</section>
				<section class="spotlight">
					<div class="image"><img src="_images/responsivo.jpg" alt="" /></div><div class="content">	
						<h2>Sites totalmente ajustáveis</h2>
						<p>Os sites se ajustam automaticamente aos dispositivos, seja no Desktop, Notebook ou smartphones.</p>
					</div>
				</section>
			</section>

			<section id="cta" class="wrapper style4">
				<div class="inner">
					<header>
						<h2>Crie o seu site</h2>
						<p>Não perca tempo, coloque sua empresa ou serviço na internet. Crie seu site ou acesse sua conta!</p>
					</header>
					<ul class="actions stacked">
						<li><a data-toggle="modal" data-target="#cadastrar" class="button fit primary">Criar Site</a></li>
						<li><a data-toggle="modal" data-target="#login" class="button fit">Entrar</a></li>
					</ul>
				</div>
			</section>

			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>														
				</ul>
				<ul class="copyright">
					<li>2021 &copy; Construindo Site</li><li>Sua presença on-line</a></li>
				</ul>
			</footer>

		</div>

		<script src="_assets/js/jquery.min.js"></script>
		<script src="_assets/js/jquery.scrollex.min.js"></script>
		<script src="_assets/js/jquery.scrolly.min.js"></script>
		<script src="_assets/js/browser.min.js"></script>
		<script src="_assets/js/breakpoints.min.js"></script>
		<script src="_assets/js/util.js"></script>
		<script src="_assets/js/main.js"></script>
			
		<div class="modal fade" id="cadastrar">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="text-center" style="color:black;">Vamos começar por aqui:</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Qual o seu nome?</label>
							<input style="color:black;" id="usuario_cadastro_nome" name="usuario_cadastro_nome" placeholder="Digite o seu nome completo" type="text" >
						</div>
						
						<div class="form-group">
							<label>E-mail:</label>
							<input style="color:black;" id="usuario_cadastro_email" name="usuario_cadastro_email" placeholder="E-mail de acesso" type="email" >
						</div>
						
						<div class="form-group">
							<label>Senha:</label>
							<input style="color:black;" id="usuario_cadastro_senha" name="usuario_cadastro_senha" placeholder="Digite a sua senha" type="password" >
						</div>

						<div class="form-group">
							<label>Repita a senha:</label>
							<input style="color:black;" id="usuario_cadastr_confirmar_senha" name="usuario_cadastr_confirmar_senha" placeholder="Confirme a sua senha" type="password" >
						</div>

						<div class="form-group">
							<label class="retornoCadastro"></label>
						</div>
					
						<button class="button primary Btcadastrar">Cadastrar</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="login">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="text-center" style="color:black;">Login</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>E-mail:</label>
							<input style="color:black;" id="usuario_login_email" name="usuario_login_email" placeholder="E-mail de Acesso" type="email" >
						</div>
						
						<div class="form-group">
							<label>Senha:</label>
							<input style="color:black;" id="usuario_login_senha" name="usuario_login_senha" placeholder="Senha" type="password" >
						</div>

						<div class="form-group">
							<label class="retornoLogin"></label>
						</div>
					
						<button class="button primary BtEntrar">Entrar</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<script>
	$(".Btcadastrar").on("click", function() {

		var nome = $('#usuario_cadastro_nome').val();
		var login = $('#usuario_cadastro_email').val();
		var senha = $('#usuario_cadastro_senha').val();
		var confirmarSenha = $('#usuario_cadastr_confirmar_senha').val();

		if(nome == '') {
			$(".retornoCadastro").html('Digite um nome válido.');
			return;
		}

		if(!validateEmail(login)) {
			$(".retornoCadastro").html('Digite um e-mail válido.');
			return;
		}

		if(senha.length < 6) {
			$(".retornoCadastro").html('Digite uma senha válida com 6 caracteres.');
			return;
		}

		if(senha != confirmarSenha) {
			$(".retornoCadastro").html('As senhas não coincidem.');
			return;
		}

		$.ajax({
			url: "_php/cadastrar.php",
			data: {
				nome: nome,
				login: login,
				senha: senha,
			},
			dataType: "json",
			type: "POST",
			beforeSend: function () {
				$(".retornoCadastro").html('Efetuando o cadastro...');
			},
			success: function(result) {
				if(result['resposta'] == 'sucesso') {
					window.location.href = "painel-adm";
				} else {
					$(".retornoCadastro").html(result['mensagem']);
				}
			},
			error: function(){
				$(".retornoCadastro").html("Erro ao efetuar o cadastro.");
			}
		});

	});

	$(".BtEntrar").on("click", function() {

		var login = $('#usuario_login_email').val();
		var senha = $('#usuario_login_senha').val();

		if(!validateEmail(login)) {
			$(".retornoLogin").html('Digite um e-mail válido.');
			return;
		}

		if(senha == '') {
			$(".retornoLogin").html('Digite uma senha válida.');
			return;
		}

		$.ajax({
			url: "_php/login.php",
            data: {
                login: login,
				senha: senha,
            },
            dataType: "json",
            type: "POST",
			beforeSend: function () {
				$(".retornoLogin").html('Efetuando o login...');
			},
			success: function(result) {
				if(result == 'erro') {
					$(".retornoLogin").html("E-mail ou senha inválida.");
				} else if(result == 'sucesso') {
					window.location.href = "painel-adm";
				}
			},
			error: function(result){
				$(".retornoLogin").html("Falha durante o login.");
			}
		});
		
	});

	function validateEmail(email) {
		var re = /\S+@\S+\.\S+/;
		return re.test(email);
	}

</script>