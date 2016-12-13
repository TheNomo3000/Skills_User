<?php
    class Conexion{
        private $bd = 'skills';
        private $usuario = 'root';
        private $pass = '';
        private $host = '127.0.0.1';
        function getBd(){
            return $this->bd;
        }
        function getUsuario(){
            return $this->usuario;
        }
        function getPass(){
            return $this->pass;
        }
        function getHost(){
            return $this->host;
        }
    }
?>