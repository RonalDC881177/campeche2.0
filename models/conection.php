<?php

class ConexionCampeche
{

 

    public static function connection(){            
        $hostname = "campeche.mysql.database.azure.com";
        $port = "3306";
        $database = "campeche";
        $username = "desarrollomysena";
        $password = "abc.123.cba.321.";
        $options = array(
            PDO::MYSQL_ATTR_SSL_CA => 'assets/DigiCertGlobalRootCA.crt.pem'
        );
        $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        }
} 