<?php

class Users extends Controller{

    protected function index(){
        $viewModel = new HomeModel();
        $this->returnView($viewModel->index(), true);
    }

    protected function register(){

        $this->returnView(null, true);
    }
    

}