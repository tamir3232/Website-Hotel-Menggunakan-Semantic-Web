<?php
require 'easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('dc','http://purl.org/dc/elements/1.1/');
EasyRdf\RdfNamespace::set('foaf','http://xmlns.com/foaf/0.1/');
EasyRdf\RdfNamespace::set('rdf','http://www.w3.org/1999/02/22-rdf-syntax-ns#');

$newrdf = new \EasyRdf\Graph("https://tamir3232.github.io/rdf/hotell.rdf");
$newrdf->load();

$allSubject = $newrdf->resourcesMatching('foaf:name');

$i = 0;

foreach($allSubject as $subjek) {
    $name[$i]   = $newrdf->get($subjek,'foaf:name');
    $nick[$i]   = $newrdf->get($subjek,'foaf:nick');
    $nim[$i]    = $newrdf->get($subjek,'foaf:nim');
    $img[$i]    = $newrdf->get($subjek,'foaf:img');
    $quote[$i]  = $newrdf->get($subjek,'dc:quote');
    $i++;
    }

?>

