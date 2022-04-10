<?php
require_once('Models/Model.php');
//require_once('Models/Category.php');

class Post extends Model {
    protected $table = 'post';
    protected $table2 = 'post_category';

    protected $attributes = [
        'title',
        'content',
        'id_create',
        'id_lastCreate',
        'link'
    ];
    protected $attributes2 = [
        'id_post',
        'id_category'
    ];

    public function __construct($data = [])
    {
        parent::__construct($data);
    }



}
