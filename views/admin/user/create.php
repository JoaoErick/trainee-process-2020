<?php 
    require_once "../../../DB/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();
    UserController::verifyAdmin();   
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../vendor/bootstrap/css/bootstrap.min.css">

  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="../../../vendor/fontawesome/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="../../../css/style.css">
  <link rel="stylesheet" href="../../../css/style-form.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../../assets/trainee-ecompjr-favicon.ico" type="image/x-icon">

  <title>EcompJr - Cadastro</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="../../../assets/trainee-ecompjr.png" alt="EcompJr" width="200px">
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

  <form class="form-group" action="/Treinamento2020/user/store" method="post" onsubmit="return validarSenha()" name="form">
    <div class="container-fluid">
      <div class="row row-form align-items-center justify-content-center">
        <div class="col-md-5">
          <input name="name" placeholder="Name" required>
        </div>
        <div class="col-md-5">
          <input type="email" name="email" placeholder="Email">
        </div>
      </div>

      <div class="row row-form align-items-center justify-content-center">
        <div class="col-md-10">
          <select name="type" required>
            <option value="">Selecione um tipo</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário comum</option>
          </select>
        </div>
      </div>

      <div class="row row-form align-items-center justify-content-center">
        <div class="col-md-5">
          <input type="password" name="password" placeholder="Selecione sua senha" required>
        </div>
        <div class="col-md-5">
          <input type="password" name="password_confirmation" placeholder="Confirme sua senha" required>
        </div>
      </div>

      <div class="btn-submit">
        <button type="submit"> Cadastrar </button>
      </div>

    </div>
  </form>

  <?php 
    if($_SESSION['message'] != ""){
      echo "<br>";
      echo "[ ". $_SESSION['message'] ." ]";

      $_SESSION['message'] = "";
    }
  ?>

  <!-- Footer -->
  <footer class="footer-section <?php if($_SESSION['user']->getType() != 'admin'){?>fixed-bottom<?php }?>">
    <div class="container">
      <div class="row footer-row align-items-center justify-content-between">
        <div class="col-sm-6 col-md-5 col-lg-4 col-xl-4 footer-col">
          <img src="../../../assets/trainee-ecompjr-logo.png" alt="" width="50px"> © 2020 Copyright <b>TRAINEE ECOMPJR</b>.
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 footer-col">
          <a href="https://instagram.com/joaoerick_?igshid=1i41edt2mcnel" target="_blank">
            <i class="fab fa-instagram-square"></i>
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

  <script>
    function validarSenha(){
      senha = document.form.password.value;
      confirma_senha = document.form.password_confirmation.value;
      if (senha == confirma_senha){
        return true;
      }
      else{ 
        alert("As senhas não são compatíveis!");
        return false;
      }
    }
  </script>
</body>

</html>