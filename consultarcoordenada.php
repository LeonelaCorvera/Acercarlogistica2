<?php

$calle= ( empty($_POST['calle']) ) ? NULL : $_POST['calle'];
$altura= ( empty($_POST['altura']) ) ? NULL : $_POST['altura'];
$localidad= ( empty($_POST['localidad']) ) ? NULL : $_POST['localidad'];
$provincia= ( empty($_POST['provincia']) ) ? NULL : $_POST['provincia'];

$calle2= str_replace(" ","%20",$calle);
$localidadcodi= str_replace(" ","%20",$localidad);
$provinciacodi= str_replace(" ","%20",$provincia);

$url='https://api.opencagedata.com/geocode/v1/json?q=Argentina%2C%20buenos%20aires%2C%20ciudad%20autonoma%20de%20buenos%20aires%2C%20'.$calle2.'%20'.$altura.'&key=1c0c3fe0f7f44a91a8ee759104ceaf15&no_annotations=1&language=es';


$curl = curl_init($url);
curl_setopt($curl, CURLOPT_ENCODING ,"");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);


$data = json_decode($json, true);

curl_close($curl);

$lat=$data['results'][0]['geometry']['lat'];
$lon=$data['results'][0]['geometry']['lng'];
$array = [
    "lat" => $lat,
    "lon" => $lon,
];

echo json_encode($array);
//echo $lat.",".$lon;


?>