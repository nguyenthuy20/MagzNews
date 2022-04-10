<?php
require_once('Controllers/Controller.php');
require_once ('Repositories/UserRepository.php');
require_once ('Models/User.php');
require_once('libs/Auth.php');
require_once('Repositories/Authenticate.php');

class ManageUsersController extends Controller{

    protected $userRepository;
    protected $authenticate;
    protected $repository;

    public function __construct(){
        parent::__construct();
        $this->repository = new UserRepository();
        $this->authenticate = new Authenticate();
    }

    public function index(){
        $users = $this->repository->getAllUser();
        return $this->view('admin/manage_users/index', compact('users'));
    }

    public function checkUsername(){
        $users = (new User())->getList(["user_name='{$this->data['user_name']}'"]);

        if(count($users) == 0){
            return $this->response(['valid' => true]);
        }
        return $this->response(['valid' => false]);
    }

    public function showFormEdit(){
        $user = (new User())->find($this->data['user_id']);
//        dd($this->data);
//        dd($user);

        if(is_null($user)){
            return $this->response([
                'message' => 'Không tìm thấy người dùng'
            ]);
        }

        return $this->view('admin/manage_users/edit',compact('user'));
    }

    public function updateUserAdmin(){
        $name = $this->repository->analysisName($this->data['fullname']);
//        dd($name);

        // nối mảng
        $this->data=array_merge($this->data,$name);
        $user = (new User())->find($this->data['id']);
        $user = $this->repository->updateUser1($user, $this->data);
        return $this->view('admin/manage_users/index', compact('user'));
    }

    public function delete(){
        $user = (new User())->find($this->data['user_id']);

        if(is_null($user)){
            return $this->response([
                'code'    => 404,
                'message' => 'Không tìm thấy người dùng'
            ]);
        }

        $user->delete();
        return $this->response([
            'code'    => 200,
            'message' => 'Xóa người dùng thành công'
        ]);
    }

    public function showFormCreate(){
        $user = new User();
        return $this->view('admin/manage_users/create', compact('user'));
    }

    public function create(){
//        dd($this->data);
        $user = $this->repository->createUserAdmin($this->data);
//        dd();
        return $this->view('admin/manage_users/index', compact('user'));
    }

}
