<?php


class Pages extends Controller
{
    public function __construct()
    {
    }
    public function edit($id){
        $this -> view('pages/edit');
    }
    public function index(){
        $data = ['title'=>'Pages has been loaded'];
        $this -> view('pages/index', $data);
    }
}