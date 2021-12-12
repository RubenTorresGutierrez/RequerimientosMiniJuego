<?php

    /*** HEAD ***/
    function cabeceraPrincipal($titulo, $css){
        echo '<head>'.
                '<meta charset="UTF-8" />'.
                '<meta name="author" content="rtorresgutierrez.guadalupe@alumnado.fundacionloyola.net" />'.
                '<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">'.
                '<meta http-equiv="X-UA-Compatible" content="IE=edge" />'.
                '<title>'.$titulo.'</title>'.
                '<link rel="stylesheet" href="css/style.css" type="text/css" />'.
                '<link rel="stylesheet" href="css/'.$css.'.css" type="text/css" />'.
                '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />'.
            '</head>';
    }

    /*** NAVBAR ***/
    function navBar($pagina){

        //Variables
        $elementos = array(
        array('index', 'INICIO')
        );

        echo '<nav>'.
                '<ul>';
                    foreach ($elementos as $elemento){
                        if($elemento == $pagina){
                            echo '<li>'.
                                    '<a href="#" class="selected">'.
                                        //ucfirst = Upper Case First (Primera letra en mayúscula)
                                        $elemento[1] .
                                    '</a>'.
                                '</li>';
                        }else{
                            echo '<li>'.
                                    '<a href="'.$elemento[0].'.php">' .
                                        $elemento[1] .
                                    '</a>'.
                                '</li>';
                        }
                    }
                echo '</ul>'.
            '</nav>';
    }

?>
