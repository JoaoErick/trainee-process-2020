<?php 
    require_once "../../../DB/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();
    UserController::verifyAdmin();   
?>


<html>
    <form action="/Treinamento2020/user/store" method="post" onsubmit="return validarSenha()" name="form">
        <input name="name" placeholder="name" required>
        <input type="email" name="email" placeholder="email">
        <select name="type" required>
            <option value="">Selecione um tipo</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário comum</option>
        </select>
        <input type="password" name="password" placeholder="Selecione sua senha" required>
        <input type="password" name="password_confirmation" placeholder="Confirme sua senha" required>
        <button type="submit"> Cadastrar </button>        
    </form>

    <?php 
        if($_SESSION['message'] != ""){
            echo "<br>";
            echo "[ ". $_SESSION['message'] ." ]";

            $_SESSION['message'] = "";
        }
    ?>

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
</html>