<?php

   //require_once __DIR__ . '/vendor/autoload.php';

   require_once 'src/controllers/CoverController.php';

   require_once 'src/controllers/adminController.php';




   $request = $_SERVER["REQUEST_URI"];
   
   define("rootUrl" , '/COVERBUILDER/');

   $adminController = new Controllers\AdminController();



   /*

     $myFriend = isset($_GET["name"]) ? $_GET["name"] : "Mike";

     $response = new Response();

     //header('Content-type: text/html');
     //http_response_code(200);
  
     $response->setHeaders(['Content-Type' => 'text/html']);
     $response->setStatusCode(200);
     $response->setContent("Hello $myFriend");

     $response->send();

     echo "Hello $myFriend";

  */



  $requestMap = [rootUrl . "login" => $adminController->displayLogin() ];

    if(isset($requestMap[$request])){

       $requestMap[$request];

    }

