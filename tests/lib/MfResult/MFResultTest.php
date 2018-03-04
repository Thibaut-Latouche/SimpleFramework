<?php

use PHPUnit\Framework\TestCase; 

class MFResultTest extends TestCase{

  protected $mfResult;
 
  public function setUp(){
    $this->mfResult = new MfResult();
  }

  public function testOnSuccessDefaultValue(){
    $this->assertTrue($this->mfResult->isSuccess);
  }
 
  public function testErrorMessage(){
    $this->assertTrue(is_null($this->mfResult->getErrorMessage()));
  }
}