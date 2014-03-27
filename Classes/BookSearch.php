<?php

class BookSearch{
  protected $arr;

  public function __construct($arr)
  {
    $this->arr=$arr;
  }

  public function find($term, $exact=false)
  {
    $results=[];
	for($i=0; $i<count($this->arr); $i++){
		/*
		if(strtolower($array[$i]['title'])==strtolower($term)){
		
		}
		*/
		if($exact){
			if(strtolower($term)==strtolower($this->arr[$i]['title'])){
				return $this->arr[$i];
			}
		}
		else{
			$pos=strrpos(strtolower($this->arr[$i]['title']), strtolower($term));
			if(!($pos === false)){
				$results[]=$this->arr[$i]['title'];
			}
		}
	}
	if($exact){
		return false;
	}
	return $results;
	
  }

} 