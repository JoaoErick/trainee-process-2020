<?php

    session_start();

    class UserController
    {

        public function index()
        {
            header("location: /Treinamento2020/views/admin/user/index.php");
        }

        public function create()
        {
            header("location: /Treinamento2020/views/admin/user/create.php");
        }

        public function store()
        {
            User::create($_POST['name'], $_POST['email'], $_POST['type'], $_POST['password']);
            header("location: /Treinamento2020/views/admin/user/index.php");
            $_SESSION['message'] = 'Cadastro realizado com sucesso!';
        }

        public function edit($id)
        {
            header("location: /Treinamento2020/views/admin/user/edit.php?id={$id[0]}");
        }

        public function profile()
        {
            header("location: /Treinamento2020/views/admin/user/profile.php");
        }

        public function update($id)
        {
            $user = User::get($id[0]);
            
            User::update($user->getId(), $_POST['name'], $_POST['email'], $_POST['type'], $_POST['password'], $_POST['password_confirmation']);
            $_SESSION['message'] = 'Dados atualizados com sucesso!';
            
            if($_SESSION['user']->getType() == 'admin')
            {
                header("location: /Treinamento2020/views/admin/user/index.php");
            }
            else
            {
                header("location: /Treinamento2020/views/admin/dashboard.php");
            }
        }

        public function delete($id)
        {
            $user = User::get($id[0]);

            User::delete($user->getId());
            header("location: /Treinamento2020/views/admin/user/index.php");
            $_SESSION['message'] = 'Usuário removido com sucesso!';
        }

        public static function all()
        {
            return User::all();
        }

        public function check()
        {
            $user = User::find($_POST['email'], $_POST['password']);
            if ($user) 
            {
                $_SESSION['user'] = $user;
                $_SESSION['message'] = "";
                header("location: /Treinamento2020/views/admin/dashboard.php");
            } 
            else 
            {
                header("location: /Treinamento2020/views/login.php");
            }
        }

        public static function verifyLogin()
        {
            if($_SESSION["user"] == null)
            {
                header("location: /Treinamento2020/views/login.php");
            }
        }

        public static function verifyAdmin()
        {
            if($_SESSION['user']->getType() != 'admin')
            {
                $_SESSION['message'] = 'Você não tem permissão para isso!';
                header("location: /Treinamento2020/views/admin/dashboard.php");
            }
        }

        public static function logout()
        {
            $_SESSION['user'] = null;
            header("location: /Treinamento2020/views/login.php");
        }

        public static function get($id)
        {
            $user = User::get($id);
            return $user;
        }
    }