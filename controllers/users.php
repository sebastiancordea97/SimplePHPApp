<?php

class Users extends Controller
{

    protected function register()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->register(), true);
    }

    protected function login()
    {   
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->login(), true);
    }
    
    protected function logout()
    {
        unset($_SESSION['isLoggedIn']);
        session_destroy();
        header('location: '.ROOT_URL);
    }
}