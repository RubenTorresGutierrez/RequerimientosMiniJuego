<?php

    //IMPORTACIONES
    require_once 'estructuraHtml.php';
    /* require_once 'clases/operaciones.php'; */

    /* //OBJETOS */
    /* $operaciones = new Operaciones(); */

    /* if (isset($_POST['enviar'])) */
    /* 	if (!empty($_FILES['imagen'])) */
    /* 		$operaciones->subirImagen($_FILES['imagen']); */
    
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
		<input type="file" name="imagen" />
		<input type="submit" name="enviar" value="ENVIAR" />
	    </form>
	</main> 
    </body>
</html>
