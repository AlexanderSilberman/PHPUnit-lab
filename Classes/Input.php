<?php
class Input
{
    private $amount;

    public function __construct()
    {
    }

    public function get($var, $setter=NULL)
    {
		if($setter==NULL){
        	return $_GET[$var];
		}
		else{
			if($_GET[$var]==NULL){
				return $setter;
			}
			return $_GET[$var];
			
		}
    }
	public function tearDown(){
		unset($_GET);
	}

}
