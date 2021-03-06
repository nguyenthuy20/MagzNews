<?php

class Session{
    public static function getFile($mode="r"){
        $filename = 'session/'.session_id().'.txt';
        if(!file_exists($filename)){
            $mode = "w";
        }
        return fopen($filename, $mode);
    }

    public static function getAll(){
        Session::getFile();
        $lines=file('session/'.session_id().'.txt');

        if (!isset($lines[0])){
            return [];
        }
        return (array) json_decode($lines[0]);
    }

    public static function get($key){
        $data=Session::getAll();

        return isset($data[$key]) ? $data[$key] : null;
    }

    public static function set($key,$value){
        $data = Session::getAll();
        $data[$key] = $value;

        $data = json_encode($data);

        $file = Session::getFile("w");

        fwrite($file, $data);
        fclose($file);

        return $value;
    }

    public static function forget($key){
        $data= Session::getAll();

        if (!isset($data[$key])){
            return true;
        }

        unset($data[$key]);
        $file=Session::getFile("w");
        $data=json_encode($data);

        fwrite($file,$data);
        fclose($file);

        return true;
    }

    public static function clear(){
        unlink('session/'.session_id());
    }

}