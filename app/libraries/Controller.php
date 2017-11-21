<?php 
 /*
  *Base Controller 
  *Loads the models and Views 
  */
  class Controller {
      //load model 
      public function model($model){
          //require model file
          require_once('../app/models/'. $model . '.php');
          return new $model();
      }

      //load view 
      public function view($view, $data=[]){
          //check view file 
          if(file_exists('../app/views/'. $view .'.php')){
              require_once('../app/views/'. $view .'.php');
          }else{
              //view does not exit 
              die($view .'.php exists in the views folder');
          }
      }
  }