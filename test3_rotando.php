<?php
include_once "recursos/Angulos.php";
include_once "recursos/PuntoCartesiano.php";


$objAngulos = new Recursos\Angulos();
$objAngulos->AsignarPunto(238,276,'a');
$objAngulos->AsignarPunto(387,377,'b');

echo "Angulo:" . rad2deg($objAngulos->DevolverInclinacion());

//Imagen inicial
$image = 'img/referencia2.jpg';
//Destino de la nueva imagen con rotación corregida
$image_rotate = 'img/referencia2_rotate.jpg';

//Definimos los grados de rotacion
$degrees = rad2deg($objAngulos->rotacion);

//Creamos una nueva imagen a partir del fichero inicial
$source = imagecreatefromjpeg($image);

//Rotamos la imagen XX grados
$rotate = imagerotate($source, $degrees, 0);

//Creamos el archivo jpg vertical
imagejpeg($rotate, $image_rotate);