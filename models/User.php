<?php

class User{
    private $id;
    private $name;
    private $email;
    private $type;
    private $password;

    public function __construct($id, $name, $email, $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->type = $type;
    }

    public static function find($email, $password)
    {
        /* Procura no banco e retorna true ou false */
        $connection = Connection::getConnection();
        $query = "select * from users where email = '{$email}' and password = '{$password}'";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_assoc($result);
            $var = new User($user['id'], $user['name'], $user['email'], $user['type']);
            return $var;
        } else {
            return false;
        }
    }

    public static function get($id)
    {
        $connection = Connection::getConnection();
        $query = "select * from users where id = {$id[0]}";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_assoc($result);
            $var = new User($user['id'], $user['name'], $user['email'], $user['type']);
            return $var;
        } else {
            return false;
        }
    }

    public static function create($name, $email, $type, $password)
    {
        /* Verificar se já existe esse email */
        $connection = Connection::getConnection();
        $query = "insert into users(name, email, type, password) values('{$name}', '{$email}', '{$type}', '{$password}')";
        $result = mysqli_query($connection, $query);
    
    }

    public static function all()
    {
        $connection = Connection::getConnection();
        $query = "select * from users";
        $result = mysqli_query($connection, $query);
        
        $users = [];
        for ($i=0; $i < mysqli_num_rows($result); $i++) { 
            $user = mysqli_fetch_assoc($result);
            $users[$i] = new User($user['id'], $user['name'], $user['email'], $user['type']);
        }

        return $users;

    }

    public static function delete($id)
    {
        $connection = Connection::getConnection();
        $query = "delete from users where id = '{$id}'";
        $result = mysqli_query($connection, $query);
    }

    public static function update($id, $name, $email, $type, $password, $password_confirmation)
    {
        $connection = Connection::getConnection();
        if( $password != "" && $password_confirmation != "" )
        {
            $query = "update users set name = '{$name}', email = '{$email}', type = '{$type}', password = '{$password}' where id = '{$id}'";
            $result = mysqli_query($connection, $query);
        }
        else
        {
            $query = "update users set name = '{$name}', email = '{$email}', type = '{$type}' where id = '{$id}'";
            $result = mysqli_query($connection, $query);
        }
        
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getPassword()
    {
        return $this->password;
    }

    public function setType($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}