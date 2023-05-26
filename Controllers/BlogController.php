<?php 


namespace App\Controllers;

use App\Models\ArticlesModel;
use App\Models\ConfigurationModel;

class BlogController extends Controller{


    public function index(){
        $company= new ConfigurationModel;
        $company=$company->find(1);
        $isCarouser=false;
        $title='Blog - '.WEB_NAME;
        $blogs= new ArticlesModel;

        $blog=$blogs->findBy(['status'=>true]);

        $this->render('blog/index', compact('isCarouser', 'title', 'company', 'blog'), 'home');
    }


    public function read( $id){

        $company= new ConfigurationModel;
        $company=$company->find(1);
        $isCarouser=false;
        $title='Blog - '.WEB_NAME;
        $blogs= new ArticlesModel;
        $blog=$blogs->find($id);
        $title= $blog->title.'- '.WEB_NAME;
        $this->render('blog/read', compact('isCarouser', 'title', 'company', 'blog'), 'home');
    }
}