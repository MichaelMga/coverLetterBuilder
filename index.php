<?php   
   
  use CoverBuilder\Http\Response;


  require_once __DIR__ . /vendor/autoload.php;

  $response = new Response();
  $response->setHeaders(['Content-Type' => 'text/html']);
  $response->setStatusCode(200);

