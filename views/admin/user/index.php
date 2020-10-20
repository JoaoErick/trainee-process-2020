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
  <link rel="stylesheet" href="../../../css/style-list.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../../assets/trainee-ecompjr-favicon.ico" type="image/x-icon">

  <title>EcompJr - Home</title>
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

  <main>
    <section id="about" class="about">
      <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $users = UserController::all();
                    foreach ($users as $user) {
                ?>    
                    <tr>
                        <td><?php echo $user->getName();?></td>
                        <td><?php echo $user->getEmail();?></td>
                        <td><?php echo $user->getType();?></td>
                        <td>
                            <?php
                                if($user->getId() != $_SESSION['user']->getId()){
                            ?>
                            <a href="/Treinamento2020/user/edit/<?php echo $user->getId()?>" class="btn-options">
                                editar                               
                            </a>
                            <?php
                                }else{
                            ?>
                            <a href="/Treinamento2020/user/profile" class="btn-options">
                                Meu perfil
                            </a>
                            <?php
                                }
                            ?>
                    

                            <?php
                                if($user->getId() != $_SESSION['user']->getId()){
                            ?>
                            <a href="/Treinamento2020/user/delete/<?php echo $user->getId()?>" class="btn-options">
                                excluir
                            </a>


                            <?php
                                }
                            ?>
                        </td>
                    </tr>
            <?php
                echo "<br>";
                }
            ?>
            </tbody>
        </table>
        <?php 
            if($_SESSION['message'] != ""){
                echo "<br>";
        ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['message']?>
            </div>
                
        <?php
                $_SESSION['message'] = "";
            }
        ?>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="footer-section <?php if($_SESSION['user']->getType() != 'admin'){?>fixed-bottom<?php }?>">
    <div class="container">
      <div class="row footer-row align-items-center justify-content-between">
        <div class="col-sm-6 col-md-5 col-lg-4 col-xl-4 footer-col">
          <img src="../../../assets/trainee-ecompjr-logo.png" alt="" width="50px"> © 2020 Copyright <b>TRAINEE ECOMPJR</b>.
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
  <script src="../../../vendor/jquery-3.5.1.min.js"></script>
  <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>


