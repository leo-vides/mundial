<?php 
class user{
    public $usuario;
    private $privilegio;
    function __construct($usu,$priv){

         $this->usuario=$usu;
         
         $this->privilegio=$priv;
    } 

      public function setusurio($usu){     
         $this->usuario=$usu;
    } 
 
    public function getusurio(){
         return $this->usuario;
    }
  
 public function getprivilegio(){
         return $this->privilegio;
    }

}
























 ?>