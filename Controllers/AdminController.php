<?php 

namespace App\Controllers;

use App\Models\ArticlesModel;
use App\Models\ConfigurationModel;
use App\Models\MediaModel;
use App\Models\ServicesModel;

class AdminController extends Controller
{
    public function index(){
        $this->isAdmin();
          header('location:'.URLROOT.'admin/dashbord');
    }

    public function dashbord(){
        $this->render('admin/dasbord', [], 'admin');
    }

    /**
     * cette foction permet la navigation de page en poage
      */
    public function page(string $params='', string $parame2=''){
        $this->isAdmin();

        $pares=['blog', 'services', 'createblog', 'media', 'aboute', 'addservice' ];
         

        if($params==''){
           $params='blog';
        }

        if(!empty($parame2) && in_array($parame2, $pares)){

            $this->render('admin\\'.$parame2, [], 'Form');
            die;

        }else if(in_array($params, $pares)){
            $data= ''; 
            $tamplate='table';

            if($params=='aboute'){
                $company= new ConfigurationModel;
                $data= $company->find(1);
                $tamplate='Form';
            }

            if($params=='services'){
                 $servive= new ServicesModel;
                 $data=$servive->findAll();
            }

            if($params=='blog'){
                $data= new ArticlesModel;
                $data=$data->findAll();
            }

           
            if($params=='media'){
                $data= new MediaModel;
                $data=$data->findAll();
                $tamplate='media';
            }
            $this->render('admin\\'.$params, compact('data'), $tamplate);
            die;
        }

        $isCarouser=false;
        $title='404!  la page '.$params. ' n\'est pas disponible - '.WEB_NAME;
        $admin_Callbak= true;
        $this->render('404', compact('title', 'isCarouser', 'admin_Callbak'), 'home');
    }


    public function deleteservice(int $id){
        $services= new ServicesModel;
        $services=$services->delete($id);
        header('location:'.URLROOT.'admin/page/services');
    }
    public function addActionServices(){

        $services= new ServicesModel;
        $services=$services
        ->setTitle(strip_tags($_POST['title']))
        ->setDescription($_POST['contenu'])
        ->setImage($_POST['image'])
        ->setSlug(str_replace(' ', '-',$_POST['title'] ))
        ->setVideo($_POST['url']);
        $services=$services->create($services);

        echo json_encode(['message'=>'Votre services a été ajouer avec succèss.']);
       
    }



    public function UpdatadeCompany(){

        $slogan=$_POST['slonga'];
        $watssap=$_POST['number_w'];
        $maps= $_POST['maps'];
        $email=$_POST['email'];
        $pays= $_POST['pays'];
        $ville=$_POST['ville'];
        $adress=$_POST['adress'];
        $terms=$_POST['terms'];
        $social=$_POST['social'];
        $social_1=$_POST['social_1'];
        $social_2=$_POST['social_2'];
        $social_3=$_POST['social_3'];
        $social_4=$_POST['social_4'];
        $desciption=$_POST['descriptions'];


        if(!empty($email)){
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo json_encode(['message'=>'Email non correcte', 'error'=>true]);
                die;
            }
        }


        
         $data=['slonga'=>$slogan, 'number_w'=>$watssap, 'maps'=>$maps, 'email'=>$email, 'pays'=>$pays,
         'ville'=>$ville, 'adress'=>$adress, 'terms'=>$terms, 'social'=>$social,  'social_1'=>$social_1,
         'social_2'=>$social_2, 'social_3'=>$social_3, 'social_4'=>$social_4, 'descriptions'=>$desciption ];

         $company= new ConfigurationModel;
         $company=$company->SaveModifications($data);
         die;

       
    }





    public function AddArticle(){
        $titre= strip_tags(ucfirst($_POST['title']));
        $contenu= $_POST['contenu'];
        $slug=ucfirst($_POST['title']);
        $by= 'jison nongolola';
        $url=$_POST['url'];
        $status= false;


        $donner = new ArticlesModel;

        $donner->AddArticle(['title'=>$titre, 'contenu'=>$contenu,
        'slug'=>$slug, 'by'=>$by, 'image'=>$_POST['image'], 'url'=>$url, 'status'=>$status ]);
      
        echo json_encode(['message'=>'Votre article a été enregister avec succèss!']);

    }

    public function deletearticle($id){
        $aticle= new ArticlesModel;
        $aticle=$aticle->delete($id);
          header('location:'.URLROOT.'admin/page/blog');
    }

    public function pubarticle(int $id, $status){
       $aticle= new ArticlesModel;

       $aticle=$aticle->setStatus($status);
       $aticle=$aticle->update($id, $aticle);

       echo 'ok';

    }




 

    public function addMedia(){

        //var_dump($_FILES);

        $file_name = $_FILES['file']['name'];
        $file_size =$_FILES['file']['size'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file_type=$_FILES['file']['type'];
        $file_ext= strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions= array("png","jpg", "jpeg", "PNG", "JPG", "JPEG");
        if(in_array($file_ext,$extensions)=== false){
            echo json_encode(['message'=>'Extension not allowed, please choose a "png","jpg", "jpeg", "PNG", "JPG", "JPEG" file', 'error'=> true]);
            die;
           }
         if($file_size > 5097152){
            echo json_encode(['message'=>'L\'image ne doit pas depasser 5 MB svp!', 'error'=> true]);
            die;
         }
          $newName=strtolower(str_replace(' ', '-', WEB_NAME)).uniqid(md5('jison')).'.'.$file_ext;
        $media= new MediaModel;
       
        if(move_uploaded_file($file_tmp,"../public/uploads/".$newName)){
              $media->
              setFilePath($newName)
             ->settype($file_type);
             $media->create($media);    
        }

        echo 'okey';
    }


    public function findallMedia(){
        $data= new MediaModel;
         $data=$data->findAll();

         foreach($data as $image){
            echo ' <a 
           
             id="maskjison-'.$image->_id.'"  href="javescript:void(0)" 
            title="'.$image->created_at.'" class="jison_conten image-tile">
            <img 
            onclick="selctedimage(`'.URLROOT.'uploads/'.$image->file_path.'`)"
             src="'.URLROOT.'uploads/'.$image->file_path.'" style="width:250px; height:200px" alt="image small">
        <div class="jison_hover">
           <span class="material-icons"  onclick="delete_image('.$image->_id.')">delete</span>
        </div></a>'; 
         }

    }

    public function deleteimage(int $id){
          $image= new MediaModel;
          $media=$image->find($id);

          unlink('../public/uploads/'.$media->file_path);

          $image=$image->delete($id);
          echo 'okey';


    }

 
    public function isAdmin(){
        if(isset( $_SESSION['user-hesed'])){
             return true;
             die;
        }else{
            header('location:'.URLROOT.'login');
            die;
        }
    }

    public function disconnect(){
        if(isset($_SESSION['user-hesed'])){
            session_unset();
            session_destroy();
        }

        header('location:'.URLROOT);
        die;
        
    }
    
}