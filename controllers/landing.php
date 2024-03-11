<?php 

    class Landing
    {        
        public function __construct(){}
        
        public function main()
        {

        	require_once("views/landing/models/header.php");
            require_once("views/landing/models/navbar.php");
            require_once("views/landing/pages/Inicio.php");
        	require_once("views/landing/models/footer.php");
        }
    }
?>