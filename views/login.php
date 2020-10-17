<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Trainee</title>
    <link rel="stylesheet" href="../css/style-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/trainee-ecompjr-favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="background">
        
    </div>

    <section id="conteudo-view" class="login">

        <table>
            <tr>
              <td><img src="../assets/trainee-ecompjr.png" alt=""></td>
            </tr>
        </table>
        <h3>Back-end e Front-end</h3>

        <form action="/Treinamento2020/user/check" method="post">
            <input name="email" placeholder="E-mail">        
            <input name="password" type="password" placeholder="Senha">
            <button type="submit"> Entrar </button>       
        </form>
        
       
        <p>© 2020 Copyright <b>TRAINEE ECOMPJR</b>. Todos os direitos reservados. </p>
      
    </section> 
</body>
</html>
