<?php
    class Libros{

        private $db;
        private $libros;

        function __construct()
        {
            $this->db= conexion::db();
            $this->libros= array();
        }

        public function getLibros()
        {
            $consulta= $this->db->query("SELECT * FROM libros");

            while ($filas= $consulta->fetch_assoc()){
                $this->libros[]= $filas;
            }
            return $this->libros;
        }

    }

?>