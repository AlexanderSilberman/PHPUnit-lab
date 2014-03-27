<?php
require_once __DIR__ . '/../classes/Input.php';

class InputTest extends PHPUnit_Framework_TestCase {

  public function test_input()
  {
	
	
    // Arrange
    $_GET['email']='dtang@usc.edu';

    // Act
	
	$in=Input::get('email');
	

    // Assert

	$test1='dtang@usc.edu';

    $this->assertEquals($test1, $in);
	//$this->assertFalse($in);
	
	//Arrange
	Input::tearDown();
	
	//Act
	$in=Input::get('email');
	
	// null, see assertNull()
	//Assert
	
	$this->assertNull($in);
	
	//Arrange
	$in=Input::get('plan', 'standard');
	
	//Assert
	$test3='standard';
	$this->assertEquals($in, $test3);
	
	
  }



} 


?>
