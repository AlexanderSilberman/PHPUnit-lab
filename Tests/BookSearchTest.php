<?php
require_once __DIR__ . '/../classes/BookSearch.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {

  public function test_search_title()
  {
	$books = [
  [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
  [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
  [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
  [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
  [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
  [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
  [ 'title' => 'Head First Java', 'pages' => 200 ]
];  
	
    // Arrange
    $search = new BookSearch($books);

    // Act
	$results = $search->find('javascript');
	
	
	//Assert
	$test1=['Learning JavaScript Design Patterns','Object Oriented JavaScript','JavaScript Web Applications'];
	$this->assertEquals($test1, $results);
	
	//Act
	
    $results = $search->find('javascript web applications', true);
	
	//Assert
	$test2=[ 'title' => 'JavaScript Web Applications', 'pages' => 99 ];
	$this->assertEquals($test2, $results);
	
	//Act
	$results = $search->find('The Definitive Guide to Symfony', true);

	
    // Assert
	
	$this->assertFalse($results);
  }



} 


?>
