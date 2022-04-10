<?php
require_once('Controllers/Controller.php');
require_once ('Models/User.php');
require_once('libs/Validator.php');
require_once('Repositories/UserRepository.php');
require_once('Repositories/Authenticate.php');

require_once "Models/Category.php";
require_once('Repositories/CategoryRepository.php');
class LoginController extends Controller{

    protected $userRepository;
    protected $authenticate;

    public function __construct()
    {
        parent::__construct();
        $this->repository = new CategoryRepository();
        $this->userRepository = new UserRepository();
        $this->authenticate = new Authenticate();
    }

    public function home(){
        return $this->view('client/index');
    }

    public function showLogin(){
        $categories = $this->repository->getAllCategory();
        $_SESSION['test_session'] = 'TEST SESSION';
        return $this->view('client/login',compact('categories'));
    }

    public function login(){
        $validate = Validator::validateEmpty($this->data, [
            'user_name','password'
        ]);
        $_SESSION['test_session_2'] = 'TEST SESSION 2';

        if(!$validate['valid']){
            return $this->response([
                'message' => $validate['message']
            ]);
        }

        $loginResult = $this->authenticate->login($this->data['user_name'], $this->data['password']);

        if(!$loginResult){
            return $this->response([
                'message' => 'Sai ten tai khoan hoac mat khau'
            ]);
        }

        return $this->redirect(Route::name('index'));
    }

    public function showRegister(){
        $categories = $this->repository->getAllCategory();
        return $this->view('client/register', compact('categories'));
    }

    public function register(){

        $validate = Validator::validateEmpty($this->data, [
            'user_name','password','confirm_password','fullname','date_of_birth'
        ]);

        if(!$validate['valid']){
            return $this->response([
                'message' => $validate['message']
            ]);
        }

        // tạo tài khoản
        $user = $this->userRepository->createUser($this->data);
        // chuyển trang sửa thông tin người dùng
        // kèm báo luôn kết quả : bạn đã tạo người dùng thành công
        return $this->redirect(Route::name('users.edit',['user_id' => $user->id]));
    }


    public function checkUsername(){
        $users = (new User())->getList(["user_name='{$this->data['user_name']}'"]);

        if(count($users) == 0){
            return $this->response(['valid' => true]);
        }
        return $this->response(['valid' => false]);
    }

    public function logout(){
        Auth::logout();
        return $this->redirect(Route::name('index'));
    }

    public function editProfile(){
        $categories = $this->repository->getAllCategory();
        $user = Auth::user();
        return $this->view('client/profile',compact('user', 'categories'));
    }

    public function updateProfile(){
        $user = Auth::user();

        // TODO SOMETHING validate data
        $names = $this->userRepository->analysisName($this->data['fullname']);
        $this->data = array_merge($this->data, $names);

        $user = $this->userRepository->updateUser($user, $this->data);
        Auth::setUser($user);
        return $this->editProfile();
    }

}
