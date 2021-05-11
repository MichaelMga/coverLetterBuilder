<?php

   namespace Http;


   class Response{


      protected string $content; 
      protected array $headers = [];
      protected int $statusCode = 200;

      public function __construct(string $content, int $statusCode, array $headers = ['Content-Type' => 'text/html']){

            $this->content = $content;
            $this->statusCode = $statusCode;
            $this->headers = $headers;

      }


      public function getContent(): string {

        return $this->content;


     }

     
     public function setContent($content): string {

          
          $this->content = $content;

 
     }

      public function getStatusCode(): int{

         return $this->statusCode;
 
      }

      public function setStatusCode($statusCode): int{

          $this->statusCode = $statusCode;

      }

      public function getHeaders(): array {

         return $this->headers;


      }

      
      public function setHeaders($headers): array {

           
           $this->headers = $headers;

  
      }


      public function send(){
          
          //headers
   
          foreach($this->headers as $key=> $value){

            header("$key: $value");

          }


          //code

           http_response_code($this->statusCode);



          //display contente


          echo $this->content;



      }


  }

 