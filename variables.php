<?php
//$algo es como se escribe las variables
$number = 9; // numero nunca se pone con comillas

$title = "Esto es PHP"; //caracter con comillas

$fecha = date(l.'-'.F.'-'.Y); //cada letra significa una representacion de como quiero mostrar la fecha

// en arreglos hay hartas diferencias con JavaScript:

$arreglo = array("Mexico","Chile","Estados Unidos"); //lo en parentesis son las cadenas de caracteres.Hay que siempre agregar el array. en este caso al no definir las variables la toma como numeros

$arreglobjeto = array("apellidos"=>"Matus,Casanova","nombres"=>"Catalina,Andrea","edad"=>"25","signo"=>"Leo", "animal"=>"perro"); //otra manera de escribir el orden de las variables. se usa arreglo objeto porque no es un numero

// pueden cometar líneas 18, 19, 20 y 21, y ver la diferencia

$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/profesorfaco/dno037-2018-09/master/data/swapi-planets.csv')); // la variables es csv que pide mapear un csv que esta en el link que aparece
      array_walk($csv, function(&$a) use ($csv) { // manda a caminar al csv
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv); // cambia el csv

//voy a buscar un archivo, y lo voy a decodificar como JSON

$data = file_get_contents('https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.geojson'); //data:se va a buscar los contenidos del json

$json = json_decode($data,true); //se agarra el json y se decodifica como json

//último truco: voy a tomar un csv y lo voy a transformar en JSON

$arreglin = $csv;//va a buscar esta variable y luego...

$arreglinjson = json_encode($arreglin);//...la convierte en json

?><!-- aqui se cierra php -->

<title><?php print($title);?></title>
</head>

<script>
//Javascript
</script>
