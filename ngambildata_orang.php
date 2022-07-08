<?php
require 'easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('dc', 'http://purl.org/dc/elements/1.1/');
EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
EasyRdf\RdfNamespace::set('geo', 'https://www.geonames.org/ontology#');
EasyRdf\RdfNamespace::set('ws', 'http://www.wisatasumut/ws/');


$newrdf = new \EasyRdf\Graph("https://rio-fransiskus.github.io/Wisata_Sumut/WisataSumut.rdf");
$newrdf->load();
$allSubject = $newrdf->resourcesMatching('dc:title');

$i = 0;

foreach ($allSubject as $subjek) {
    $title[$i]   = $newrdf->get($subjek, 'dc:title');
    $description[$i]  = $newrdf->get($subjek, 'dc:description');
    $price[$i]  = $newrdf->get($subjek, 'ws:price');
    $city[$i]  = $newrdf->get($subjek, 'geo:city');
    $map[$i]    = $newrdf->get($subjek, 'ws:map');
    $phone[$i] = $newrdf->get($subjek, 'foaf:phone');
    $image[$i] = $newrdf->get($subjek, 'ws:image1');
    $i++;
}

$total_wisata = $i;
