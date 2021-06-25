<?php

namespace App;

use App\Core\Model;

class Auth {

    public static function Login($email, $senha) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        if($stmt->rowCount() >= 1) {
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            if(password_verify($senha, $resultado['senha'])) {
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $resultado['id'];
                header('Location: /admin/index');
            } else {
                return "Senha inválida";
            }
        } else {
            return "Email inválido";
        }
    }

    public static function Logout() {
        session_destroy();
        header('Location: /home/login');
    }

    public static function checkLogin() {
        if(!$_SESSION['logado']) {
            header('Location: /home/login');
            exit;
        } 
    }

    public static function checkNotLogin() {
        if(isset($_SESSION['logado'])) {
            header('Location: /admin/index');
            exit;
        } 
    }
}