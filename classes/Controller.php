<?php

abstract class Controller
{
    protected $request;
    protected $action;

    public function __construct($action, $request)
    {
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction()
    {
        $actionCall = $this->action;
        return $this->$actionCall();
    }

    protected function returnView($viewModel, $fullView)
    {
        $view = 'views/'. get_class($this) . '/' . $this->action . '.php';
        if ($fullView) {
            require('views/main.php');
        } else {
            require($view);
        }
    }
}