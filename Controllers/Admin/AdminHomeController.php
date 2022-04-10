<?php
require_once('Controllers/Controller.php');

class AdminHomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }


    public function index(){
        return $this->view('admin/index');
    }
    public function home(){
        return $this->view('admin/home');
    }

}
