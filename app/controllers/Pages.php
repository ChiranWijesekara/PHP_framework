<?php
    class Pages extends Controller{
        public function __construct(){
            //echo 'Page is controller';
        }

        public function index(){

        }

        public function about($name, $age){
            $data= [
                'username' => $name,
                'age' => $age
            ];
            $this->view('v_about',$data);
        }
    }
?>