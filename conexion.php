<?php

class conexion{
    
    public static function db()
    {
        $servername= "localhost";
        $username= "root";
        $password= "";
        $dbname= "biblioteca";

        $conn= new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Conexión fallida!!!!".$conn->connect_error);
            }
        else{
            $conn->query("SET NAMES 'utf8'");
            print "CONEXION OK";
            return $conn;
        }    
    }
}    


?>