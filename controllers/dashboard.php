<?php 

    class Dashboard
    {
        
        public function __construct(){}
        
        public function main()
        {

        	require_once("Vistas/dashboard/modules/Header.php");
        	require_once("Vistas/dashboard/modules/NavLat.php");
            require_once("Vistas/dashboard/modules/NavSup.php");
        	require_once("Vistas/dashboard/pages/Inicio.php");
        	require_once("Vistas/dashboard/modules/Footer.php");
        }
    }
?>