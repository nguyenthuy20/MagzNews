<?php
require_once('Controllers/Controller.php');

class CheckoutController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function checkout(){
        return $this->view('client/checkout');
    }

}