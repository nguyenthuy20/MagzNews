<?php
require_once('Controllers/Controller.php');

class ShopController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function shop(){
        return $this->view('client/shop');
    }

}