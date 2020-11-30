<?php
    namespace App\Controllers;
    
    use App\Controller;
    use App\Request;
    use App\Session;

    class TaskController extends Controller{

        public function __construct(Request $request,Session $session){
            parent::__construct($request,$session);
        }

        public function index(){
                //task list for user

                //$tasks=$this->selectAll();
                $this->render();
        }

    }
