<?php
    
    //IMPORTACIONES
    require_once 'conexion.php';

    class Operaciones{
	
	//ATRIBUTOS
	private $conexion = null;

	    function __construct(){

		$this->conexion = new Conexion();
	    	
	    }

	    function subirImagen($imagen){

		//Ruta donde se va a subir la imagen
		$ruta = '/img';
		$rutaNombreImagen = $ruta.basename($imagen['name']);

		if (move_uploaded_file($imagen['tmp_name'], $rutaNombreImagen)){
		    
		    echo 'Se ha subido correctamente';

		    //Consulta sql
		    $sql = 'INSERT INTO imagen(url) VALUES("'.$rutaNombreImagen.'")';

		    //Enviar consulta al método consultar() de la clase Conexion
		    $this->conexion->consultar($sql);

		    //Cerrar conexión
		    $this->conexion->cerrarConexion();

		}else echo 'No se ha subido';

	    }

	    function obtenerSprites(){

		//Consulta SQL
		$sql = 'SELECT * FROM sprite';

		//Enviar la consulta al método consultar() de la clase Conexion
		$this->conexion->consultar($sql);

		//Añadir el resultado de la consulta a un array
		$datos = array();
		while ($fila = $this->conexion->extraerFila()) {
		    array_push($datos, $fila);
		}

		//Cerrar conexión
		$this->conexion->cerrarConexion();

		//Devolver los datos
		return $datos;

	    }

    }