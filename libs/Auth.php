<?php

class Auth{

    public static function user(){
        $userData = Session::get(AUTH_KEY);

        if (is_null($userData)){
            return null;
        }
//        $user = new User();
        return (new User())->setAttributes($userData);
    }

    public static function checkAuth(){
//        return isset($_SESSION[AUTH_KEY]);
        return !is_null(Session::get(AUTH_KEY));
    }

    public static function setUser($user) {
        return Session::set(AUTH_KEY, $user);
    }

    public function logout(){
        return Session::forget(AUTH_KEY);
    }

}