<style type="text/css">

	p{
		color:yellow;
		font-size:32px;
		font-family:Impact;
		font-variant-numeric: slashed-zero;
	}

</style>

<?php

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

	echo "<p>".$formato."</p>";

?>