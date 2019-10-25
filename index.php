<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/view/index.html';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//$hello = array('data.json');
//if($this->validator->isValid($data)) {
    $currentData = json_decode(file_get_contents('../data.json'), true);
    $currentData[] = $data;
//    print_r($currentData);
//}
$request = Request::createFromGlobals();

$response = new Response($currentData);
$response->send();