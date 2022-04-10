<?php
require_once('Models/Model.php');

class Category extends Model {
    protected $table = 'category';

    protected $attributes = [
        'name',
        'parent_id'
    ];

    public function __construct($data = [])
    {
        parent::__construct($data);
    }

}