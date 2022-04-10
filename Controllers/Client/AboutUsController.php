<?php
require_once('Controllers/Controller.php');

class AboutUsController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function about_us(){
        return $this->view('client/about_us');
    }

}