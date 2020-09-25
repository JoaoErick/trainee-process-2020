<?php 
    require_once "../../../DB/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();
    $user = $_SESSION['user'];
?>


<html>
    <form action="/Treinamento2020/user/update/<?php echo $user->getId()?>" method="post">
        <input name="name" placeholder="name" value="<?php echo $user->getName()?>">
        <input type="email" name="email" placeholder="email" value="<?php echo $user->getEmail()?>">
        <select name="type">
            <option value="">Selecione um tipo</option>
            <option value="admin"<?php if($user->getType() == "admin"){?> selected <?php }?>>Administrador</option>
            <option value="user" <?php if($user->getType() == "user"){?> selected <?php }?>>Usuário comum</option>
        </select>
        <input type="password" name="password">
        <input type="password" name="password_confirmation">
        <button type="submit"> Cadastrar </button>        
    </form>
</html>