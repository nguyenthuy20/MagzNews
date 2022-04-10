<?php

class CategoryRepository
{
    public function getAllCategory(){
        return (new Category())->getListCategory([],"ORDER BY 'name'");
    }

    public function updateCategory($category, $data){
        $dataUpdate = array(
            'name'    => isset($data['name']) ? $data['name'] : $category->name,
            'parent_id'    => isset($data['parent_id']) ? $data['parent_id'] : $category->parent_id,
        );
//        dd($dataUpdate);
        $category->update($dataUpdate);
        return $category;
    }

    public function createCategory($data){
        $dataCreate = [
            'name'    => isset($data['name']) ? $data['name'] : '',
            'parent_id'    => isset($data['parent_id']) ? $data['parent_id'] : '',
        ];

//        dd($dataCreate);
        return (new Category())->create($dataCreate);
    }

}