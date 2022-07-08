<?php
require 'easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('dc', 'http://purl.org/dc/elements/1.1/');
EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/#');


$newrdf = new \EasyRdf\Graph("https://tamir3232.github.io/rdf/hotell.rdf");
$newrdf->load();
$allSubject = $newrdf->resourcesMatching('dc:type');

$i = 0;

foreach ($allSubject as $subjek) {
    $type[$i]   = $newrdf->get($subjek, 'dc:type');
    $price[$i]  = $newrdf->get($subjek, 'dc:price');
    $review[$i]  = $newrdf->get($subjek, 'dc:review');
    $guest[$i] = $newrdf->get($subjek, 'dc:guest');
    $description[$i]  = $newrdf->get($subjek, 'dc:description');
    $image[$i]    = $newrdf->get($subjek, 'dc:image');
    $reviewer[$i] = $newrdf->get($subjek, 'dc:reviewer');
    $i++;
}

$total_kamar = $i;
