<?php
require_once('Controllers/Controller.php');

class ManageOrdersController extends Controller{

    public function __construct(){
        parent::__construct();
    }


    public function index(){
        return $this->view('admin/manage_orders/index');
    }
    
    public function detail(){
        return $this->view('admin/manage_orders/detail');
    }

}
