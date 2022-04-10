<?php


class PostRepository
{
    public function getAllPost(){
        return (new Post())->getListPost([],"ORDER BY 'title'");
    }

    public function getAllPostCate(){
        return (new Category())->getListPostCate([],"ORDER BY 'name'");
    }

    public function createPost($data){
        $dataCreate = [
            'title'    => isset($data['title']) ? $data['title'] : '',
            'content'    => isset($data['content']) ? $data['content'] : '',
        ];
//        dd($dataCreate);
        return (new Post())->create($dataCreate);
    }

    public function updatePost($post, $data){
        $dataUpdate = array(
            'title'    => isset($data['title']) ? $data['title'] : $post->name,
            'content'    => isset($data['content']) ? $data['content'] : $post->content,
        );
//        dd($dataUpdate);
        $post->update($dataUpdate);
        return $post;
    }


}