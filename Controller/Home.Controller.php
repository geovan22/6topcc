<?php

    //include ("./Framework/Smarty/Smarty.class.php");
    
    class Home
    {
        public $smarty;
        
        public function __construct() 
        {
            $this->smarty=new Smarty();    
        }

        
        public function Inicio()
        {
            /*
            $smarty=new Smarty();
            $smarty->assign('title',"HOME");
            $smarty->display('Home.tpl');
            */
            
            $this->smarty->assign('title',"Home");
            $this->smarty->display('Home.tpl');
            
            
        }
        
        
    }
?>