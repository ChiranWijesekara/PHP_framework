<?php
    class Controller{
        public function mode($mode){
            require_once '../app/models/' .$model.'.php';

            //Intentlate the model andpass it to the controller member variable
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