<?php
require_once('Controllers/Controller.php');
require_once ('Models/User.php');
require_once ('Repositories/PostRepository.php');
require_once ('Models/Post.php');

require_once ('Models/Category.php');
require_once ('Repositories/CategoryRepository.php');

class ManagePostsController extends Controller{

    protected $repository;
    protected $repository2;
    public function __construct(){
        parent::__construct();
        $this->repository = new PostRepository();
        $this->repository2 = new CategoryRepository();
    }

    public function index(){
        $posts = $this->repository->getAllPost();
        $post_category = $this ->repository->getAllPostCate();
        return $this->view('admin/manage_posts/index', compact('posts', 'post_category'));
    }

    public function showFormCreate(){
        $posts = new Post();
        return $this->view('admin/manage_posts/create', compact('posts'));
    }

    public function create(){
        $post = $this->repository->createPost($this->data);
        return $this->view('admin/manage_posts/index', compact('post'));
    }

    public function delete(){
        $post = (new Post())->find($this->data['post_id']);
        if(is_null($post)){
            return $this->response([
                'code'    => 404,
                'message' => 'Không tìm thấy bài viết này'
            ]);
        }

        $post->delete();
        return $this->response([
            'code'    => 200,
            'message' => 'Xóa bài viết thành công'
        ]);
    }

    public function showFormEdit(){
        $post = (new Post())->find($this->data['post_id']);
        if(is_null($post)){
            return $this->response([
                'message' => 'Không tìm thấy bài viết'
            ]);
        }
        return $this->view('admin/manage_posts/edit', compact('post'));
    }

    public function update(){
        $post = (new Post())->find($this->data['id']);
        $post = $this->repository->updatePost($post, $this->data);

        return $this->view('admin/manage_posts/index', compact('post'));

    }


}
