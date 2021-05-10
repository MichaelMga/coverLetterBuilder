<?php

   namespace CoverBuilder\Http;


class Response{
      protected string $content; 
      protected array $header = [];
      protected int $statusCode = 200;

      public function __construct(string $string, int $statusCode, array $headers = []){


      }


      public function getStatusCode(): int{

        $this->statusCode = $statusCode;

      }

      public function getHeaders(): int {


      }
}

 