<?php
class Yuan37Api extends SetApi{
	public $url='http://api.yuan37.com';	
	

	/*
	
	��client����ӳ�䵽server
	
	
	*/

	
	public function loginv(){
		$this->data['password']=789;
		return $this->_mapping();
	}

	
	
	public function bootstrap(){
		return $this->_mapping();
	}
	


	
}
