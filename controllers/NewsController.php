<?php
    class NewsController {
                

        public function actionAll(){
          $view = new Viewer;
          $view->data(News::get_all());
          $view->display('all.php');   
            
        }
        
        public function actionOne(){
            $view = new Viewer;
            $id = $_GET['id'];
            $view->data(News::get_one($id));
            $view->display('one.php');
        }
        
        
    }


?>