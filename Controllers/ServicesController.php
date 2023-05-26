<?php 


namespace App\Controllers;

use App\Models\ConfigurationModel;
use App\Models\ServicesModel;

class ServicesController extends Controller
{
    public function index(){

         $company= new ConfigurationModel;
         $sevices= new ServicesModel;


         $company=$company->find(1);
         $sevices=$sevices->findAll();

        $isCarouser=false;
        $title='Nos service - '.WEB_NAME;

        $this->render('service/index', compact('isCarouser', 'title', 'company', 'sevices'), 'home');
    }


    public function details(int $id){
        $company= new ConfigurationModel;
        $sevices= new ServicesModel;


        $company=$company->find(1);
        $sevice=$sevices->find($id);

       $isCarouser=false;
       $title='Nos service - '.WEB_NAME;

       $this->render('service/detail', compact('isCarouser', 'title', 'company', 'sevice'), 'home');
    }



}


