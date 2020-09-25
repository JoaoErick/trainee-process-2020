<?php
    require_once "../../../DB/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();
    UserController::verifyAdmin();
?>


<?php
    $users = UserController::all();
    foreach ($users as $user) {
?>

    <?php
        echo $user->getName();
        echo " | ";
        echo $user->getEmail();
        echo " | ";
        echo $user->getType();
    ?>
    <?php
        if($user->getId() != $_SESSION['user']->getId()){
    ?>
        <a href="/Treinamento2020/user/edit/<?php echo $user->getId()?>">
        <button>
        editar
        </button>
        </a>
    <?php
        }else{
    ?>
        <a href="/Treinamento2020/user/profile">
        <button>
        Meu perfil
        </button>
        </a>
    <?php
    }
    ?>
    

    <?php
    if($user->getId() != $_SESSION['user']->getId()){
    ?>
        <a href="/Treinamento2020/user/delete/<?php echo $user->getId()?>">
        <button>
        excluir
        </button>
        </a>


    <?php
    }
    ?>
<?php
echo "<br>";
}
?>
