<?php 
    require_once "../../DB/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    UserController::verifyLogin();
    echo "Olá ".$_SESSION['user']->getName();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css">

  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="../../vendor/fontawesome/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/style-dashboard.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/trainee-ecompjr-favicon.ico" type="image/x-icon">

  <title>EcompJr - Home</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="../../assets/trainee-ecompjr.png" alt="EcompJr" width="200px">
    </a>
    <button 
      class="navbar-toggler" 
      type="button" 
      data-toggle="collapse" 
      data-target="#navbarTogglerDemo02" 
      aria-controls="navbarTogglerDemo02" 
      aria-expanded="false" 
      aria-label="Alterna navegação"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse navigation" id="navbarTogglerDemo02">
      <ul class="navbar-nav mt-2 mt-lg-0">
        <li class="nav-item">
          <h3 class="link this" href="#about">
          <?php
                    echo "Olá, ".$_SESSION['user']->getName()."! Seja bem vindo.";
          ?>
          <span class="sr-only">(Página atual)</span></h3>
        </li>
    
        <li class="nav-item">
          <a class="link btn-sair" href="/Treinamento2020/user/logout">Sair</a>
        </li>
      </ul>
    </div>
  </nav>

  <main>
    <section id="about" class="about">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-6">
            <h1>
                <?php
                    echo "Olá, ".$_SESSION['user']->getName()."! Seja bem vindo.";
                ?>
            </h1>

            <p>
                <?php
                    if($_SESSION['user']->getType() == 'admin'){
                ?>
                    <a href="/Treinamento2020/user/index">Listagem de usuários</a>
                    <a href="/Treinamento2020/user/create">Cadastrar novo usuário</a>
                <?php
                    }
                ?>
                    <a href="/Treinamento2020/user/profile">Meu Perfil</a>

                    <?php 
                        if($_SESSION['message'] != ""){
                    ?>
                            <script>alert('<?php echo $_SESSION['message']?>')</script>
                    <?php
                        $_SESSION['message'] = "";
                        }
                    ?>
            </p>
          </div>
          <div class="col-3 col-icon">
            <img src="./assets/ecompjr-logo.png" alt="EcompJr Logo">
          </div>
        </div>
      </div>
    </section>

    <!-- Divider -->
    <hr class="solid">

    <div class="pillars">
      <section class="mission">
        <div class="container">
        
        </div>
      </section>

      <section class="vison">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col">
              <h2>Visão</h2>
              <p>
                Em 2020, <span>desenvolver lideres</span>, <span>comprometidos</span> 
                e <span>capacitados</span> que entregam <span>resultados</span>.
              </p>
            </div>
            <div class="col">
              <i class="far fa-eye"></i>
            </div>
          </div>
        </div>
      </section>

      <section class="values">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col">
              <i class="fas fa-users"></i>
            </div>
            <div class="col">
              <h2>Valores</h2>
              <p>
                Os valores de uma empresa guiam a conduta da mesma, portanto a 
                EcompJr. baseia-se nos seguintes valores: <span>Protagonismo, 
                assiduidade, resiliência, constância em resultados, evolução com 
                os erros, conexão com o movimento, ética e empatia.</span>
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="values">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col">
              <i class="fas fa-users"></i>
            </div>
            <div class="col">
              <h2>Valores</h2>
              <p>
                Os valores de uma empresa guiam a conduta da mesma, portanto a 
                EcompJr. baseia-se nos seguintes valores: <span>Protagonismo, 
                assiduidade, resiliência, constância em resultados, evolução com 
                os erros, conexão com o movimento, ética e empatia.</span>
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer-section">
    <div class="container">
      <div class="row footer-row align-items-center justify-content-between">
        <div class="col-sm-6 col-md-5 col-lg-4 col-xl-4 footer-col">
          <img src="../../assets/trainee-ecompjr-logo.png" alt="" width="50px"> © 2020 Copyright <b>TRAINEE ECOMPJR</b>.
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 footer-col">
          <a href="https://instagram.com/joaoerick_?igshid=1i41edt2mcnel" target="_blank">
            <i class="fab fa-instagram-square""></i>
          </a>
          <a href="https://github.com/JoaoErick" target="_blank">
            <i class="fab fa-github-square"></i>
          </a>
          <a href="https://instagram.com/aaaaaaaallan?igshid=30wfpvvfwv2o" target="_blank">
            <i class="fab fa-instagram-square"></i>
          </a>
          <a href="https://github.com/AllanCapistrano" target="_blank">
            <i class="fab fa-github-square"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="../../vendor/jquery-3.5.1.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
