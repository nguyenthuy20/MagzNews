<?php
require_once('Controllers/Controller.php');

class SingleproductController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function singleproduct(){
        return $this->view('client/singleproduct');
    }

}