<?php

class UserRepository{

    protected $default_avatar = 'public/avatar/NoImage.png';
    protected $avatarPath = 'public/avatar/';

    public function createUser($data){

        $name = $this->analysisName($data['fullname']);
        $dataCreate = [
            'user_name' => $data['user_name'],
            'email'    => isset($data['email']) ? $data['email'] : '',
            'password' => md5($data['password']),
            'date_of_birth' => date_format(date_create($data['date_of_birth']), 'Y-m-d')
        ];

        $dataCreate = array_merge($dataCreate, $name);

        return (new User())->create($dataCreate);
    }

    public function createUserAdmin($data){
//        dd($data);
        $name = $this->analysisName($data['fullname']);
//        dd($data['fullname']);
//        dd($name);

        $filename = $this->avatarPath.'-'.time();
        $avatar= File::uploadBase64($data['avatar'], $filename);;
        $dataCreate = [
            'avatar'   => $avatar,
            'user_name' => $data['user_name'],
            'email'    => isset($data['email']) ? $data['email'] : '',
            'password' => md5($data['password']),
            'date_of_birth' => date_format(date_create($data['date_of_birth']), 'Y-m-d')
        ];

        $dataCreate = array_merge($dataCreate, $name); //gộp mảng
//        dd($dataCreate);

        return (new User())->create($dataCreate);
    }

    public function updateUser($user, $data){

        $avatar = $user->avatar;
        $filename = $this->avatarPath.$user->user_name.'-'.time();

        if (isset($data['avatar'])){
            if (is_string($data['avatar'])){
                $avatar = File::uploadBase64($data['avatar'], $filename);
            }else{
                $avatar = File::uploadFile($data['avatar'], $filename);
            }

            if (!$avatar){
                $avatar = $user->avatar;
            }
        }

        $dataUpdate = array(
            'avatar'        => $avatar,
            'email'         => isset($data['email']) ? $data['email'] : $user->email,
            'first_name'    => isset($data['first_name']) ? $data['first_name'] : $user->first_name,
            'middle_name'   => isset($data['middle_name']) ? $data['middle_name'] : $user->middle_name,
            'last_name'     => isset($data['last_name']) ? $data['last_name'] : $user->last_name,
            'date_of_birth' => isset($data['date_of_birth']) ? dateFormat($data['date_of_birth'],'Y-m-d') : $user->date_of_birth,
        );

        $user->update($dataUpdate);

        return $user;
    }

    public function updateUser1( $user, $data)
    {
        $avatar = $user->avatar;
        $filename = $this->avatarPath.$user->user_name.'-'.time();
        if (isset($data['avatar'])) {
            if (is_string($data['avatar'])) {
                $avatar = File::uploadBase64($data['avatar'], $filename);
            } else {
                $avatar = File::uploadFile($data['avatar'], $filename);
            }

            if (!$avatar) {
                $avatar = $user->avatar;
            }

        }

        $dataUpdate = array(
            'id'            =>$data['id'],
            'avatar'        => $avatar,
            'email'         => isset($data['email']) ? $data['email'] : $user->email,
            'first_name'    => isset($data['first_name']) ? $data['first_name'] : $user->first_name,
            'middle_name'   => isset($data['middle_name']) ? $data['middle_name'] : $user->middle_name,
            'last_name'     => isset($data['last_name']) ? $data['last_name'] : $user->last_name,
            'date_of_birth' => isset($data['date_of_birth']) ? dateFormat($data['date_of_birth'],'Y-m-d') : $user->date_of_birth,
        );
        // dd($dataUpdate);
        $user->update1($dataUpdate);
        return $user;
    }

    public function analysisName($name)
    {
        $names = explode(' ', $name);

        foreach ($names as $index => $word) {
            if ($word == "") {
                unset($names[$index]);
            }
        }
        $names = array_values($names);

        $length = count($names);

        if ($length == 1) {
            return [
                'last_name'   => '',
                'middle_name' => '',
                'first_name'  => $names[0],
            ];
        }
        if ($length == 2) {
            return [
                'last_name'   => $names[0],
                'middle_name' => '',
                'first_name'  => $names[1],
            ];
        } else {
            $middle_name = '';

            for ($i = 1; $i <= $length - 3; $i++) {
                $middle_name .= $names[$i] . ' ';
            }
            $middle_name .= $names[$length - 2];

            return [
                'last_name'   => $names[0],
                'middle_name' => $middle_name,
                'first_name'  => $names[$length - 1],
            ];
        }
    }

    public function getAllUser(){
        return (new User())->getList([],"ORDER BY 'first_name'");
    }

}