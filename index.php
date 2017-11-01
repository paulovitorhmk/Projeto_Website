<!-- os 3 scripts php devem ser removidos daqui e colocados em arquivos apropriados na pasta php, para teste renomear a index com .php -->

<?php
  $msg = (isset($_GET['msg']) && !empty($_GET['msg'])) ? $_GET['msg'] : false;
?>


<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="../_css/style.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
    
      <!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="../_css/cadastro.css" rel="stylesheet" type="text/css">
<script href="../_js/cadastro.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#sobre">SOBRE</a></li>
        <li><a href="#comer">ONDE COMER</a></li>
        <li><a href="#infos">INFORMAÇÕES</a></li>
        <li><a href="#cadastro">CADASTRAR MINHA LOJA</a></li>
        <li><a href="#contato">CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Olá, </h1> 
  <p>Procurando lugares para comer sem glúten, leite ou açúcar em Santos e região?</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Receber novidades!</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (Sobre) -->
<div id="sobre" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Sobre nós</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><button class="btn btn-default btn-lg">Fale conosco</button>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-signal logo"></span> escolher icone-->
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>O que queremos?</h2><br>
      <h4><strong>Missão:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>Visão:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!-- Container (Onde Comer) -->
<div id="comer" class="container-fluid text-center">
  <h2>Onde Comer</h2>
  <h4>Selecione o um tipo de busca:</h4>
<div class="container">
<div class="col-xs-offset-0 col-sm-6 col-sm-offset-3">
<div>
  <select class="selectpicker" title="Restrições" multiple>
  <option>Açúcar</option>
  <option>Sal</option>
  <option>Glúten</option>
  <option>Lactose</option>
  <option>Proteínas do Leite</option>
  <option>Outros</option>
</select>
<select class="selectpicker" title="Estabelecimentos" multiple>
  <!--optgroup label="Condiments" data-max-options="2"-->
    <option>Restaurante</option>
    <option>Pizzaria</option>
    <option>Churrascaria</option>
  <!--/optgroup-->
  <!--optgroup label="Breads" data-max-options="2"-->
    <option>Lanchonete</option>
    <option>Pastelaria</option>
    <option>Bar</option>
    <option>Sorveteria</option>
    <option>Mercado</option>
    <option>Doceria</option>
  <!--/optgroup-->
</select>
<input class="btn" type="submit" value="Buscar"/>
</div><!-- .btn-group -->
</div>
</div>
</div>


<div id="resultado" class="container">
  <div class="col-sm-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <img class="img-responsive" src="http://fakeimg.pl/250x100/">
      </div>
      <div class="panel-body">Pastelaria do Joao o Melhor Pastel sem Gluten</div>
      <div class="panel-footer">Av.: Ana Costa, nº775</div>
    </div>
  </div>
  
  <div class="col-sm-4">
    <div class="panel panel-default">
      <div class="panel-heading"><img src="http://fakeimg.pl/250x100/" alt="" class="img-responsive"></div>
      <div class="panel-body">Testo</div>
      <div class="panel-footer">asd</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel panel-default">
      <div class="panel-heading"><img src="http://fakeimg.pl/250x100/" alt="" class="img-responsive"></div>
      <div class="panel-body">Testo</div>
      <div class="panel-footer">asd</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel panel-default">
      <div class="panel-heading"><img src="http://fakeimg.pl/250x100/" alt="" class="img-responsive"></div>
      <div class="panel-body">Testo</div>
      <div class="panel-footer">asd</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel panel-default">
      <div class="panel-heading"><img src="http://fakeimg.pl/250x100/" alt="" class="img-responsive"></div>
      <div class="panel-body">Testo</div>
      <div class="panel-footer">asd</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel panel-default">
      <div class="panel-heading"><img src="http://fakeimg.pl/250x100/" alt="" class="img-responsive"></div>
      <div class="panel-body">Testo</div>
      <div class="panel-footer">asd</div>
    </div>
  </div>
  
  
</div>


<!-- Container (Informações) -->
<div id="infos" class="container-fluid text-center bg-grey">
  <h2>Informações</h2><br>
  <h4>Viva mais saudável</h4>
</div>

<!-- Container (Cadastrar Minha Loja) -->
<div id="cadastro" class="container-fluid">
  <div class="text-center">
    <h2>Cadastrar Minha Loja</h2>
  </div>
<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>forgot your password? <a href="#">click here</a></p>
				<p>new user? <a href="#">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>

<!-- REGISTRATION FORM
<div class="text-center" style="padding:50px 0">
	<div class="logo">register</div>
	<!-- Main Form
	<div class="login-form-1">
		<form id="register-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
						<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
					</div>
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
					</div>
					<div class="form-group">
						<label for="reg_fullname" class="sr-only">Full Name</label>
						<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
					</div>
					
					<div class="form-group login-group-checkbox">
						<input type="radio" class="" name="reg_gender" id="male" placeholder="username">
						<label for="male">male</label>
						
						<input type="radio" class="" name="reg_gender" id="female" placeholder="username">
						<label for="female">female</label>
					</div>
					
					<div class="form-group login-group-checkbox">
						<input type="checkbox" class="" id="reg_agree" name="reg_agree">
						<label for="reg_agree">i agree with <a href="#">terms</a></label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="#">login here</a></p>
			</div>
		</form>
	</divn Form -->
</div>

<!-- FORGOT PASSWORD FORM
<div class="text-center" style="padding:50px 0">
	<div class="logo">forgot password</div>
	<!-- Main Form 
	<div class="login-form-1">
		<form id="forgot-password-form" class="text-left">
			<div class="etc-login-form">
				<p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
			</div>
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="fp_email" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email address">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="#">login here</a></p>
				<p>new user? <a href="#">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</div>

<!-- Container (Contato) -->
<div id="contato" class="container-fluid bg-grey" align="center">
   <?php if($msg=='enviado'): ?>
        <h1>Mensagem enviada, agradecemos seu contato!</h1>
    <?php else: ?>

  <fieldset>
    <legend><h2 class="text-center">Contato</h2></legend>
    <!--<form action="_php/form_contato.php" method="post">-->
    <form  method="post">
      <label for="nome"> Nome: </label></br>
      <input id="nome" type="text" name="nome" required/></br>
      <label for="telefone"> Telefone: </label></br>
      <input id="telefone" name="telefone" type="tel"/></br>
      <label for="email"> E-mail: </label></br>
      <input id="email" type="email" name="email" required/></br>
      <label for="assunto"> Mensagem </label></br>
      <textarea name="assunto" id="assunto"></textarea></br>
      <input type="submit"/>
    </form>
  </fieldset>
  
    <?php endif; ?>
  
  <!--
  <h2 class="text-center">CONTATO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Encontrou um novo lugar? Nos envie.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Santos, SP</p>
      <p><span class="glyphicon glyphicon-phone"></span> +055 (013)X XXXX-XXXX</p>
      <p><span class="glyphicon glyphicon-envelope"></span> contato@contato.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div-->
</div>
<!-- estudar para implementação -->
<!-- Add Google Maps -->
<!-- <div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Nome Site <br/><a href="https://www.endereco.com" title="Topo">Ir para o topo</a></p>
</footer>
<!-- estudar para implementação
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
-->



<script>
  $("input[type=submit]").click( function(){
    
    if( $("nome").val() != '' && $("telefone").val() != '' &&
        $("email").val() != '' && $("assunto").val() != ''){
          return;
    }
    
    /*AJAX  */
    $.ajax({
      url: '/_php/form_contato.php', //url,
      data: {
        nome:"nome",
        telefone:"telefone",
        email:"email",
        assunto:"assunto",
      }, //data,
      success: function(response){
        if( response == 'enviado' ){
          $('form').hide();
          $('#contato').html('<h1>Enviado</h1>');
        }
      },
      error: function(response){
        $('form').show()
        $('#contato').html('<h1>Não enviado</h1>');
      }, //success,
      dataType: 'json'
    });
  
  });
</script>
</body>
</html>
