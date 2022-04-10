<?php
require_once('Controllers/Controller.php');

class ShopCartController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function shop_cart(){
        return $this->view('client/shop_cart');
    }

}