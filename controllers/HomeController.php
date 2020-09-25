<?php 

class HomeController{

    public function login(){
        header("Location:/Treinamento2020/views/login.php");
    }

    public function index(){
        header("Location:/Treinamento2020/views/home.php");
    }
}