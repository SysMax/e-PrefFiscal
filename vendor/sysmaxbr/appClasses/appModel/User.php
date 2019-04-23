<?php

namespace SysMax\appModel;

use SysMax\appDB\ConexaoSQL;
use SysMax\Model;

/**
 * Description of User
 *
 * @author Maximus
 */
class User extends Model {

    const SESSION = "User";

    public static function login($login, $password) {
        $sql = new ConexaoSQL();

        $results = $sql->select("SELECT * FROM TabUsuarios WHERE login_usu = :LOGIN", array(
            ":LOGIN" => $login
        ));

        if (count($results) === 0) {
            throw new \Exception("Algo está errado!... Confira seu usuário e senha que foram informados...");
        }

        $data = $results[0];

        if (password_verify($password, $data["senha_usu"]) === true) {

            $user = new User();

            $user->setData($data);

            $_SESSION[User::SESSION] = $user->getValues();

            return $user;
        } else {
            throw new \Exception("Algo está errado!... Confira seu usuário e senha que foram informados...");
        }
    }
    
    public static function verifyLogin() {
        
        if (!isset($_SESSION[User::SESSION]) || !$_SESSION[User::SESSION] || !(int)$_SESSION[User::SESSION]["id_user"] > 0) {
            
            header("Location: /index");
            exit();
        }
    }
    
    public static function logout() {
        
        $_SESSION[User::SESSION] = NULL;
    }

}
