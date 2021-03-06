<!-- os 3 scripts php devem ser removidos daqui e colocados em arquivos apropriados na pasta php, para teste renomear a index com .php -->
<script type="text/php" src="">
  <?php
    include ("siteci/_css/style.css");
    $msg = 0;
    @$msg = $_POST['msg'];
  ?>
</script>

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

<div class="jumbotron text-center" id="topo">
  <h1>Olá, </h1> 
  <p>Procurando lugares para comer sem glúten, leite ou açúcar em Santos e região?</p> 
  <form method="GET">
    <div class="input-group">
      <input type="search" class="form-control" size="50" placeholder="Email Address" required>
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

<div class="container-fluid bg-gray">
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
  <h4>Encontre um local para sua próxima refeiçao</h4>
  <br>
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
    <h4>Seja encontrado!</h4>
  </div>
</div>

<!-- Container (Contato) -->
<div id="contato" class="container-fluid bg-grey" align="center">
  <script type="text/php" src="">
    <?php if($mgs==enviado): ?>
        <h1>Mensagem enviada, agradecemos seu contato!</h1>
    <?php else: ?>
  </script>
  <fieldset>
    <legend><h2 class="text-center">Contato</h2></legend>
    <form action="https://formspree.io/leoabreu14@gmail.com" method="POST" class="form">
      <label for="nome"> Nome: </label></br>
      <input id="nome" type="text" name="nome" required/></br>
      <label for="email"> E-mail: </label></br>
      <input id="email" type="email" name="email" required/></br>
      <label for="assunto"> Assunto: </label></br>
      <input id="assunto" name="assunto" type="text"/></br>
      <label for="mensagem"> Mensagem </label></br>
      <textarea name="mensagem" id="mensagem"></textarea></br>
      <input type="submit" class="btn-sbm" name="submit" />
    </form>
  </fieldset>
  <script type="text/php" src="">
    <?php endif; ?>
  </script>
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
  <p>Nome Site <br/><a href="#topo" title="Topo">Ir para o topo</a></p>
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

</body>
</html>
