<?php

class indexController{

    //funciones del index
    public function home(){
        require_once 'views/layout/home.php';
    }

    public function services(){
        require_once 'views/layout/servicios.php';
    }

    public function spareParts(){
        require_once 'views/layout/refacciones.php';
    }

    public function us(){
        require_once 'views/layout/nosotros.php';
    }

    public function faq(){
        require_once 'views/layout/faq.php';
    }

    public function contact(){
        require_once 'views/layout/contacto.php';
    }

    //funciones de los servicios
    public function servicioAsesoria(){
        require_once 'views/servicios/servicio-asesoria.php';
    }

    public function servicioAsistencia(){
        require_once 'views/servicios/servicio-asistencia.php';
    }

    public function servicioGarantias(){
        require_once 'views/servicios/servicio-garantias.php';
    }

    public function llaveMano(){
        require_once 'views/servicios/llave-mano.php';
    }

    //Función términos y condiciones
    public function terminosYCondiciones(){
        require_once 'views/terminos/aviso-privacidad.php';
    }

    //función de formulario
    public function formProcess(){
        if(isset($_POST['enviar'])){
            $nombre = htmlspecialchars($_POST['nombre']);
            $telefono = htmlspecialchars($_POST['telefono']);
            $email = htmlspecialchars($_POST['email']);
            $estado = htmlspecialchars($_POST['estado']);
            $ciudad = htmlspecialchars($_POST['ciudad']);
            $mensaje = htmlspecialchars($_POST['mensaje']);
            $terminos = htmlspecialchars($_POST['terminos']);

            if($nombre && $telefono && $email && $estado && $ciudad && $mensaje && $terminos){
                require_once 'views/formulario/thanks.php';
            }else{
                
            }
            
        }else{
            echo "error";
        }
    }
}//termina controller