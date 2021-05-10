<?php

  class CoverControllerTest extends PHPUnit_Framework_TestCase {

   public function testCoverBuilding(){

    //Given

      $_POST["author"];

      //When 


      //Then => action

      $controller = new \CoverBuilder\Controllers\CoverController;

      $response = $controller->sendCover();
    
    }


}