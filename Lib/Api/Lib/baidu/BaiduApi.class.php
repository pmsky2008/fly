<?php
/*
api����һ����ָ��һ̨�����
�п��ܾ��Ǳ��أ��п��ܶ�̨����ÿ̨�����ṩ�Ľӿڲ�һ��
�����api-client����Ҫ��һ��ͳһ�ĵ������
������Ҫ�������ԣ�
1.���ؽӿ�:localhost
2.Զ��api�ӿڣ�api.yuan37.test,
Զ�̽ӿ�Ҳ����ָ���̨����,api.yuan37.test��Ҫ�����ѵĻ�������
client�ṩһ�׻���ȥ���ʸ��ַ���
*/
class BaiduApi extends SetApi{
	public $url='http://www.baidu.com';
	
	public function __construct($action){
		$this->action=$action;
	}
	
	
	public function data($data){
		$action=$this->action;
		
		return $this->$action($data);
	}
	
	
	public function all($data){
		//echo $api;
		$http=H();
		if($http->postUrl($this->url,$this->data)=='200'){
			return $http->content;
		}	
	}
	
	
	
	public function charset(){
	
		//echo $api;
		$http=H();
		if($http->getUrl($this->url,$this->data)=='200'){
			return $http->getCharset();
		}else{
			return $http->getDebug();
		}
		
	}
	
	public function keyword(){
	
		//echo $api;
		$http=H();
		if($http->getUrl($this->url,$this->data)=='200'){
			return $http->getKeyword();
		}else{
			return $http->getDebug();
		}
		
	}	
	
}
