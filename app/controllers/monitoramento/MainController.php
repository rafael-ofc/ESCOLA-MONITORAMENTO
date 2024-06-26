<?php 

namespace app\controllers\monitoramento;

use app\models\monitoramento\GestorModel;

class MainController{

    public static function Templates($template, $data = null){
        include "public/views/plates/head.php";
        include "public/views/plates/header.php";
        include $template;
        include "public/views/plates/PopUps.php";
        include "public/views/plates/footer.php";
    }

    public static function Verificar_sessao($sessao){
        if($_SESSION[$sessao]){
            return True;
        }else{
            return false;
        }
    }

    public static function ADM(){
        self::Templates("public/views/plates/main.php");
    }

    public static function index(){
        self::Templates("public/views/aluno/login.php");
    }

    public static function login_professor(){
        self::Templates("public/views/professor/login.php");
    }

    public static function login_gestor(){
        self::Templates("public/views/gestor/login.php");
    }

    public static function login_adm(){
        self::Templates("public/views/adm/login.php");
    }
}
