<?php
require_once 'models/usuario.php';

class usuarioController{
    public function startLogin(){
        
        require_once 'views/usuario/login.php';
    }

    public function subirProductos(){
        require_once 'views/productos/crear.php';
    }

    public function login(){
        if(isset($_POST)){
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $pass = isset($_POST['pass']) ? $_POST['pass'] : false;

            if($email && $pass){
                $user = new usuario();
                $user->setEmail($email);
                $user->setPassword($pass);
                $identity = $user->login();
                
                if($identity && is_object($identity)){
                    $_SESSION['identity'] = $identity;

                    if($identity->rol=="admin"){
                        $_SESSION['admin'] = true;
                    }

                    header("Location:".base_url."usuario/subirProductos");
                }else{
                    $_SESSION['error_login'] = "failed";
                    header("Location:".base_url."usuario/startLogin");
                }
            }

        }
    }
}//termina clase usuarios