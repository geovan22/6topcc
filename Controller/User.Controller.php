<?php
    class User
    {
        public $user;
        
        public function __construct() 
        {
            $this->user=new Usuarios();  
        }
        
        public function BuscarUsuario()
        {
            $email=$_POST['email'];
            $pass=$_POST['pass'];
           
            $us=$this->user->BuscarUser($email,$pass);
            //var_dump($us);
            
            //echo'<br /><br />';
            
            $usuario=mysqli_fetch_assoc($us);
            
            //var_dump($usuario);
            //hola
        }
    }
?>
