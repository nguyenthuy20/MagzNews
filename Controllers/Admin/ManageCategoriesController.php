<?php
require_once('Controllers/Controller.php');
require_once ('Repositories/CategoryRepository.php');
require_once ('Models/Category.php');
require_once ('Models/User.php'); // hiển thị session

class ManageCategoriesController extends Controller{
    protected $repository;

    public function __construct(){
        parent::__construct();
        $this->repository = new CategoryRepository();
    }

    public function index(){
        $categories = $this->repository->getAllCategory();
        return $this->view('admin/manage_categories/index', compact('categories'));
    }
    public function index2(){
        $categories = $this->repository->getAllCategory();
        return $this->view('admin/manage_categories/index2', compact('categories'));
    }

    public function showFormCategoryEdit(){
        $category = (new Category())->find($this->data['category_id']);
//        dd($category);

        if(is_null($category)){
            return $this->response([
                'message' => 'Không tìm thấy chuyên mục'
            ]);
        }

        return $this->view('admin/manage_categories/edit', compact('category'));
    }

    public function update(){
        $category = (new Category())->find($this->data['id']);
        $category = $this->repository->updateCategory($category, $this->data);
//        dd($category);
        return $this->view('admin/manage_categories/index', compact('category'));

    }

    public function delete(){
        $category = (new Category())->find($this->data['category_id']);
        if(is_null($category)){
            return $this->response([
                'code'    => 404,
                'message' => 'Không tìm thấy chuyên mục này'
            ]);
        }

        $category->delete();
        return $this->response([
            'code'    => 200,
            'message' => 'Xóa chuyên mục thành công'
        ]);
    }

    public function showFormCreateCategory(){
        $category = new Category();
        return $this->view('admin/manage_categories/create', compact('category'));
    }

    public function create(){
        $category = $this->repository->createCategory($this->data);
        return $this->view('admin/manage_categories/index', compact('category'));


    }

}
