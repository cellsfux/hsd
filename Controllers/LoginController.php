<?php

namespace App\Controllers;

use App\Models\UsersModel;

class LoginController extends Controller{

    public function index(){

        //$pass= password_hash('1234', PASSWORD_ARGON2I);
       // echo $pass;
    
      $this->render('login/index', [], 'login'); 
       
    }






    
    public function loginparam(){

     
          
        if(!isset($_POST['email'])|| !isset($_POST['pass'])|| 
         $_POST['email']=='' || $_POST['pass']==''
        ){
            echo json_encode(['message'=>'Vous devez remplire tous les champs svp','error'=> 'empty']);   
            die;    
        }


             $emal= $_POST['email'];
              $pass=$_POST['pass'];

            if(!filter_var($emal, FILTER_VALIDATE_EMAIL)){
                   echo json_encode(['message'=>'Adrresse email pas valide', 'error'=> 'email']);
                    die;
                   }
   
        $user= new UsersModel;
        $emaiv=$user->findBy(['email'=>$emal]);

        if(!$emaiv){
             echo json_encode(['message'=>'les informations ne sont pas correctent', 'error'=> 'empty']);
             die;
        }          
       

           foreach($emaiv as $lis){

            if(!password_verify($_POST['pass'], $lis->password)){
                echo json_encode(['message'=>'les informations ne sont pas correctent pwd', 'error'=> 'empty']);
                die;
           }else{

            $user=$user->find( $lis->_id);
            
            $_SESSION['user-hesed']=[
                 'id'=>$user->_id,
                 'name'=> $user->name,
                 'last_name'=>$user->last_name,
            ];

            echo json_encode(['messsage'=>'1000', 'url'=>URLROOT.'admin']);
            die;
           }

   
           }

         
        
           
            
      
       
    
}


}