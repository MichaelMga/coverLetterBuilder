<?php   
   
  use CoverBuilder\Http\Response;


  require_once __DIR__ . '/vendor/autoload.php';

  $response = new Response();

  //header('Content-type: text/html');
  //http_response_code(200);
  
  $response->setHeaders(['Content-Type' => 'text/html']);
  $response->setStatusCode(200);

  

