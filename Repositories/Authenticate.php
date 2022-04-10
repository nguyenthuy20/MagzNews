<?php
class Authenticate{

    public function login($user_name, $password){
        $password = md5($password);
        $users = (new User())->getList([
            "user_name='{$user_name}'",
            "password='{$password}'",
        ]);

        if(empty($users)){
            return false;
        }

        // TODO: LƯU LẠI NGƯỜI DÙNG VỪA ĐĂNG NHẬP
        return Auth::setUser($users[0]);
    }


}