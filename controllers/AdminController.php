<?php
    class AdminController{
        
        public function actionAdd(){
            $title = $_POST['title'];
            $text = $_POST['text'];
            $result = Admin::add_news($title,$text);
            header('Location: index.php');
            return $result;
        }
    }

?>