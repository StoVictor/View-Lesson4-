<?php
    class News extends AbstractModel  {
        public $title;
        public $id;
        public $text;
        
        protected static $table = 'newsMVC';
        protected static $class = 'News';
        
    }

?>