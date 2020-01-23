<?php


class Pages extends Controller
{
    public function __construct()
    {
//        Andmebaasi ühenduse testimiseks
//        $db = new Database();
        $this->pagesModel = $this->model('Page');
    }
    public function edit($id){
        $this -> view('pages/edit');
    }
    public function index(){
        $data = ['title'=>'Pages has been loaded'];
        $this -> view('pages/index', $data);
    }
    public function adduser(){
        $this->pagesModel->addUser();
        $this->index();
    }
    public function getuser(){
        
    }
}