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
       
        function login(){
            $this->render(null,'login');
        }

        function log(){
            if (isset($_POST['email'])&&!empty($_POST['email'])
            &&isset($_POST['passw'])&&!empty($_POST['passw']))
            {
                $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
                $pass=filter_input(INPUT_POST,'passw',FILTER_SANITIZE_STRING);
            
           
                $user=$this->auth($email,$pass);
                if ($user){
                    $_SESSION['user']=$user;
                    //si usuari valid
                    if(isset($_POST['remember-me'])&&($_POST['remember-me']=='on'||$_POST['remember-me']=='1' )&& !isset($_COOKIE['remember'])){
                        $hour = time()+3600 *24 * 30;
                        $path=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
                        setcookie('uname', $user['uname'], $hour,$path);
                        setcookie('email', $user['email'], $hour,$path);
                        setcookie('active', 1, $hour,$path);          
                    }
                    header('Location:user/dashboard');
                }
                else{
                    header('Location:user/login');
                }
            
            }
        }
        

        private function auth($email,$pass)
        {
            try{   
                $db=$this->getDB();
                $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
                $stmt->execute([':email'=>$email]);
                $count=$stmt->rowCount();
                $row=$stmt->fetchAll(\PDO::FETCH_ASSOC);  
                
                if($count==1){       
                    $user=$row[0];
                    $res=password_verify($pass,$user['passw']);
                
                    if ($res){
                        return $user;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }catch(\PDOException $e){
                return false;
            }
        }
    }