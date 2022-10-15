<?php

$xml = simplexml_load_file("arquivo.xml");

echo "signo" . $xml->signo . "<br>";

$dtaNasc = $_POST['day'];

$date = new DateTime($day);

?>