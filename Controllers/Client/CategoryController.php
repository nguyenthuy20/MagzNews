<?php
require_once('Controllers/Controller.php');
require_once ('Models/User.php');
require_once('libs/Validator.php');
require_once('Repositories/CategoryRepository.php');
require_once('Repositories/Authenticate.php');
require_once ('Models/User.php');

class CategoryController extends Controller{

    protected $repository;
    protected $authenticate;

    public function __construct()
    {
        parent::__construct();
        $this->repository = new CategoryRepository();
        $this->authenticate = new Authenticate();
    }

    public function index(){
        $categories = $this->repository->getAllCategory();
        return $this->view('client/index', compact('categories'));
    }



}
