<?php
    require 'Conexion.php';
    class Operaciones{
        private $resultado, $conexion, $datos;
        function conectarBD(){
            $this->datos = new Conexion();
            $this->conexion = new mysqli($this->datos->getHost(),$this->datos->getUsuario(),$this->datos->getPass(),$this->datos->getBd());
        }
        function consultar($consulta){
            $this->resultado = $this->conexion->query($consulta);
        }
        function cerrarConexion(){
            $this->conexion->close();
        }
        function getResultado(){
            return $this->resultado;
        }
        function getConexion(){
            return $this->conexion;
        }
    }
?>