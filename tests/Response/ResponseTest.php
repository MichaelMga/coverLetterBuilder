<?php


   class ResponseTest extends PHPUnit_Framework_TestCase  {
        
      /** @test */
        
      function isReponseOk(){

         ob_start();

         include "index.php";
         
         $result = ob_get_clean();


         $this->assertEquals("Hello Mike", $result);

         

      }

    
   }