<?php
    class Database {
        private $db;
        private $table;
        
        public function __construct($db,$table){
            $this->db = $db;
            $this->table = $table;
            $this->sql_connect();
        }
        
       private function sql_connect(){
            mysql_connect('localhost','root','');
            mysql_select_db($this->db);
        }
        
        public function sql_query($que){
            $res = mysql_query($que) or die(mysql_errno().':'.mysql_error());
            if(gettype($res) != 'boolean'){
                $ret = [];
                while($row = mysql_fetch_assoc($res)){
                    array_push($ret,$row);
                }   
                return $ret;    
            } else{
                return $res;  
            } 
        }
        
        public function AllNews_Get(){
            $allNews = $this->sql_query('SELECT * FROM ' . $this->table);
            return $allNews;
        }
        public function OneNews_Get($id){
            $oneNews = $this->sql_query('SELECT * FROM ' . $this->table . ' WHERE id=' . $id)[0];
            return $oneNews;
        }
        
        public function Add_News($title,$text){    
            $que = "INSERT INTO `NewsMVC` (`title`,`text`) VALUES ( '" .$title. "' , '". $text ."')";
            $result = $this->sql_query($que);
            return $result;
        }
    }
        
?>