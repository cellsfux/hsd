<?php

namespace App\Controllers;

use App\Models\ConfigurationModel;
use App\Models\ServicesModel;

class MainController extends Controller{
      public function index(){
            $isCarouser=true;
            $title=WEB_NAME;

            $company= new ConfigurationModel;
            $company=$company->find(1);
         $this->render('main/index',compact('isCarouser', 'title', 'company'), 'Home');
      }

      public function services(){
        $sevices= new ServicesModel;
        $sevices=$sevices->findAll();
         foreach($sevices as $i){
          echo '<li><a class="dropdown-item" href="'.URLROOT.'services/details/'.$i->_id.'">'.$i->title.'</a></li>';
         }
      }

      
    public function contact(){
      $company= new ConfigurationModel;
      $company=$company->find(1);
      $isCarouser=false;
      $title='Contacts - '.WEB_NAME;

      $this->render('contact/index',compact('isCarouser', 'title', 'company'), 'Home');
  }



  public function about(){
    $company= new ConfigurationModel;
    $company=$company->find(1);
    $isCarouser=false;
    $title='Contacts - '.WEB_NAME;

    $this->render('about/index',compact('isCarouser', 'title', 'company'), 'Home');
  }
}

