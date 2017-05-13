
<?php

$archivo = "contador.txt"; // Archivo en donde se acumulará el numero de visitas
$abre = fopen($archivo, "r"); // Abrimos el archivo para solamente leerlo (r de read)
$total = fread($abre, filesize($archivo)); // Leemos el contenido del archivo(filesize "detectara" la longitud de Bytes de $archivo la cual desconocemos)
fclose($abre); // Cerramos la conexión al archivo
$abre = fopen($archivo, "w"); // Abrimos nuevamente el archivo (w de write)
$total = $total + 1; // Sumamos 1 nueva visita
$grabar = fwrite($abre, $total); // Y reemplazamos por la nueva cantidad de visitas
fclose($abre); // Cerramos la conexión al archivo

// Imprimimos el total de visitas dándole un formato
echo "<div id='contentt'><img src='img/views.png' alt='' /><span class='total'>Total de visitas: <span class='views'>".$total."</span></span></div>";
echo "<div id='contentt2'><img src='img/views.png' alt='' /><span class='total'>Total de visitas: <span class='views'>".$total."</span></span></div>";


/*
	$archivo = "contador.txt";
	$contador = 0;

	$fp = fopen($archivo, "r");
	$contador = fgets($fp, 26);
	fclose($fp);

	$contador=$contador+1;
	$formato = str_pad($contador, 5, "0", STR_PAD_LEFT);

	$fp = fopen($archivo, "w+");
	fwrite($fp, $contador, 26);
	fclose($fp);

	echo "<p>".$formato."</p>";*/

?>