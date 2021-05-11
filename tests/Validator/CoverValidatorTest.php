<?php


   class CoverValidatorTest extends PHPUnit_Framework_TestCase{

      
      //data provider


      function missingFieldsProvider(){

               return [
                  [ "mike" , "unknown author" ],
                  [  ],
                  [  ]

               ]

      }


      /**
       * @dataProvider missingFieldsProvider 
       */


       
       function coversCantBeBuiltWithMissingFields($author, $errorMessage ){





       }




   }