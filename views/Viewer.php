<?php
    class Viewer {
        public $items;
        
        public function data($items){
            $this->items = $items;
        }
        public function display($template){
            include $template;
        }
    }

?>