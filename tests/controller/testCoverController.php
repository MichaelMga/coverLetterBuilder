<?php

  class CoverControllerTest extends PHPUnit_Framework_TestCase {

   private Database $pdo;

  public function setup(){

     $this->pdo = new PDO('mysql:host=localhost;dbname=coverbuilderdb;charset=utf-8', 'root', '');

     $this->pdo->query("DELETE FROM coverbuilderdb");

     $this->coverModel = new CoverModel($this->pdo);

     $this->controller = new \Controller\CoverController($this->pdo);

     $_POST = [];

    
  }

  public function testCoverBuilding(){

    //Given

      //$_POST["author"];

      //When

      //Then => action

      //$controller = new \CoverBuilder\Controllers\CoverController;

      //$response = $controller->sendCover();

      //$this->assertEquals(302, $response->getStatusCode());
    
    }




}