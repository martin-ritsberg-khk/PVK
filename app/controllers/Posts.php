<?php


class Posts extends Controller
{
    public function __construct()
    {
        echo 'Posts exists<br>';
    }
    public function edit($id){
        echo 'Edit function has loaded<br>';
        echo "Post with id $id has been edited<br>";
    }
    public function index(){
        echo 'Index function has loaded<br>';
    }
}