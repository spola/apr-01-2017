<?php

	function recuperarProfesores() {
		return array("sergio","alfonso","veronica","andres");
	}

	$profesores = recuperarProfesores();
	
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mi calculadora</title>
        <style>
            /*Comentario*/
            
            .operador {
                background-color: lightgray;
            }
            .igual {
                background-color: gray;
                color: white;
            }
            input[type=submit] {
                width: 30px;
            }
            
        </style>
    </head>
    <body>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Año ingreso</th>
                    </tr>
                </thead>
                <tbody>
					<?php foreach($profesores as $indice => $profesor) : ?>
					<tr>
                        <td><?php echo $profesor?></td>
                        <td>20</td>
                        <td>2017</td>
                    </tr>
					<?php endforeach?>
                </tbody>
            </table>
        
    </body>
</html>