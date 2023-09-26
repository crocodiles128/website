<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="/css/css/mdb.min.css" />
  <title>Crocodilândia Veiculos</title>

</head>

<body>
  <?php
  require_once('navbar_crocodilandia.php');
  ?>

  <h1 class="text-center text-white" style="background-color: #9c9c9c;">Veículos do Servidor</h1>
  <br>
  <p class="text-center fs-3">Aqui você verá informações sobre os Veículos do Servidor</p>
  <br><br>
  <p class="text-center fs-5">Com essas informações você terá mais facilidade em comprar e usar veículos in-game</p>
  <br><br>
  <center><img src="imgs/MTV_thumb.jpg" class="w-80" alt="Imagem demosntrativa"></center><br><br>
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Categorias de Veículos
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          <code>Bicicletas, Hoverboards, Motos, carros, tanques, tanques-anti-aéreos, aviões, helicópteros, UFO's</code>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Sub Categorias
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Cada categoria é dividida em outras categorias somando aproximadamente 22
          subcategorias com cada uma delas de 4 a 81 cores diferentes para cada tipo de veículo</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          Como adquirir
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Você pode comprar os veículos usando <code>/warp cardealer</code> e lá você escolhe
          seu carro e cor para comprar usando o money do servidor ou solicitando para um Administrador pelo <a
            href="https://discord.io/crocodiles">discord</a> e efetuando a compra com <a
            href="https://loritta.website/us/extras/faq-loritta/sonhos">Sonhos da Loritta</a><br>Você também pode
          Participar de Eventos para conseguir veículos exclusivos</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
          Comando Uteis
        </button>
      </h2>
      <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          <code>/vehicle addrider</code> - Adiciona um Jogador como permitido para DIRIGIR<br>
          <code>/vehicle addmember</code> -Adiciona um jogador como permitido para entrar no veículo<br>
          <code>/vehicle removerider</code> - Remove um Jogador permitido para DIRIGIR<br>
          <code>/vehicle removemember</code> - Remove um jogador permitido para entrar no veículo<br>
          <code>/vehicle setowner</code> - Faz do jogador dono do veículo
        </div>
      </div>
    </div>
  </div>


  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>
<footer class="text-center text-white" style="background-color: #9c9c9c;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!--Discord-->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://discord.io/crocodiles" role="button"
        data-mdb-ripple-color="dark"><i class=" fab fa-discord fa-2x"></i></a>
      <!-- Github -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://github.com/crocodiles128" role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-github fa-2x"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright: CROCODILES🐊
    <a class="text-dark" href="https://discord.io/crocodiles">discord/crocodiles</a>
  </div>
  <!-- Copyright -->
</footer>

</html>

─────▄████▀█▄
───▄█████████████████▄
─▄█████.▼.▼.▼.▼.▼.▼▼▼▼
▄███████▄.▲.▲▲▲▲▲▲▲▲
████████████████████▀▀