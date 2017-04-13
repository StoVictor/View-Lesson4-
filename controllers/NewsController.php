<?php
    class NewsController {
                

        public function actionAll(){
          $view = new Viewer();
          $view->items = News::get_all();
          echo $view->display('all.php');   
            
        }
        
        public function actionOne(){
            $id = $_GET['id'];
            $view = new Viewer();
            $view->item = News::get_one($id);
           echo $view->display('one.php');
        }
        
        
    }


?>