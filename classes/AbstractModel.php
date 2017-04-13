<?php
    abstract class AbstractModel implements IModel {
        protected static $table;
        protected static $class;
        
        public static function get_all(){
            $db = new Database(static::$class,static::$table);
            return $db->AllNews_Get();
        }
        public static function get_one($id){
            $db = new Database(static::$class,static::$table);
            return $db->OneNews_Get($id);
        }
        public static function add_news($title,$text){
            $db = new Database(static::$class,static::$table);
            return $db->Add_News($title,$text);
            
        }
    }


?>