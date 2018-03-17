<?php

namespace meuprojeto;
require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$request = Request::createFromGlobals();
$response = Response::create();

echo $request ->get('teste');

$conteudo = '<h1> Curintia </h1>';
$response->setContent($conteudo);
$response->send();

