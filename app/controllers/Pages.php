<?php
    class Pages extends Controller{
        public function __construct(){
            //echo 'Page is controller';
            
            $this->pagesModel = $this->model('M_Pages');
        }

        public function index(){

        }

        public function about(){

            $users =$this->pagesModel->getUsers();
            $data= [
                'users' => $users
            ];
            $this->view('v_about',$data);
        }
    }
?>