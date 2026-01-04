<?php
    class Controller{
        public function model($model){
            require_once '../app/models/' .$model.'.php';

            // Instantiate the model and return it
            return new $model();
        }
        
        //to load the view
        public function view($view, $data = []){
            if(file_exists('../app/views/' .$view. '.php')){
                require_once '../app/views/' .$view. '.php';
            }else{
                die('Corresponding view does not exist');
            }
        }
    }
?>