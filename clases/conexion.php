<?php

	// IMPORTACIONES
	require_once 'config/config.php';

	class Conexion{

		// ATRIBUTOS
		private $mysqli = null;
		private $resultado = null;

		function __construct(){

			//OBJETOS
			// Se instancia un objeto desde la clase mysqli con los datos 
	                // de conexión importados en forma de constantes desde configdb.php
			$this->mysqli = new mysqli(SERVIDOR, USUARIO, PASSWD, BD);

		}

		function consultar($consulta){

			return $this->resultado = $this->mysqli->query($consulta);

		}
