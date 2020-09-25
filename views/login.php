<?php
    session_start(); 
?>
<html>
    <form action="/Treinamento2020/user/check" method="post">
        <input name="email" placeholder="email">        
        <input name="password" type="password" placeholder="password">
        <button type="submit"> Entrar </button>        
    </form>
</html>