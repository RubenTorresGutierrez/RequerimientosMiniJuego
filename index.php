<?php

    //IMPORTACIONES
    require_once 'estructuraHtml.php';
    require_once 'clases/operaciones.php';

    //OBJETOS
    $operaciones = new Operaciones();

    if (isset($_POST['enviar']))
    	if (!empty($_FILES['imagen']) && sizeof($_FILES['imagen']) >= 2)
    		$operaciones->subirImagen($_FILES['imagen']);
    $datos = $operaciones->obtenerSprites();
    
?>
<!DOCTYPE html>
<html lang="es">
    <?php

        //Variables
        $titulo = 'Inicio | Añadir imágenes';
        $css = 'index';

        cabeceraPrincipal($titulo, $css);

    ?>
    <body>
        <?php

            //Variables
            $pagina = 'index';

            navBar($pagina);

        ?>
	<main>
	    <form action="index.php" method="POST">
		<?php

		    echo '<select id="minijuego" name="minijuego">';
			foreach($datos as $sprite){
			    echo '<option value="'.$sprite['idSprite'].'">'.$sprite['nombre'].'</option>';
			}
		    echo '</select>';
		
		?>
		<input type="file" name="imagen[]" multiple />
		<input type="submit" name="enviar" value="ENVIAR" />
	    </form>
	</main> 
    </body>
</html>
