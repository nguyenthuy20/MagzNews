<?php
require_once('Controllers/Controller.php');

class AccountController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function account(){
        return $this->view('client/account');
    }

}
