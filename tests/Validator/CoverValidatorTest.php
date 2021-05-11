<?php


   class CoverValidatorTest extends PHPUnit_Framework_TestCase{

      
      //data provider

      function setup(){

         $this->controller = new \Controllers\CoverController;

      }


      function missingFieldsProvider(){

               return [
                  [ ['content' => 'my cover'], "unknown author" ],
                  ['author' => 'mike'], "missing content" ],
                  [ [ ] , "both fields are missing" ];

               ]

      }


      /**
       * @test
       * @dataProvider missingFieldsProvider 
       */


       
       function coversCantBeBuiltWithMissingFields($postData, $errorMessage ){

          //php unit will loop on the array, and use each array el as arguments 

          
       }




   }