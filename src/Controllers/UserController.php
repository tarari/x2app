<?php

    namespace App\Controllers;
    
    use App\Controller;
    use App\Session;
    use App\Request;

    class UserController extends Controller
    {

        public function __construct(Request $request,Session $session){
            parent::__construct($request,$session);
        }

        public function index(){
                
        }

        function login(){
            $this->render(null,'login');
        }

        function log(){
            //action="user/log"
            //obtener $POSTs
            //autenticar
        }
    }