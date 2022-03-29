<?php 

class App{
    protected $controller = "ClientController";
    protected $action = "index";
    protected $params = [];

    public function __construct()
    {
        $this->prepareURL();
        $this->render();
        
    }
    //extract the controller, method and parameters
    private function prepareURL(){
        $url =  $_SERVER['QUERY_STRING'];
        if(!empty($url)){
            $url = explode("/", $url);
            
            //define the controller
            $this->controller = isset($url[0])? ucwords($url[0])."Controller":"ClientController";
            // echo $this->controller;
            
            //define the method
            $this->action = isset($url[1])? $url[1]:"index";
            
            unset($url[0],$url[1]);
            $this->params = !empty($url) ? array_values($url):[];
        }
    }
    private function render(){
        if(class_exists($this->controller)){
            $controller = new $this->controller;
            if(method_exists($controller,$this->action)){
                call_user_func_array([$controller,$this->action],$this->params);
            }
        }
        else{
            echo " This controller : " . $this->controller . " NOT EXIST";
        }
    }
}
