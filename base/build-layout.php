<?php

	

	class BuildLayout{

		public function __construct(){}

		public static function draw(){ 
			$url = new UrlParams();
			$urlParams = $url->getQueryArray();
			if(array_key_exists('pass-builder', $urlParams)){
				$passBuilder = $urlParams['pass-builder'];
				$action = (array_key_exists('q', $urlParams)) ? $urlParams['q'] : ''; 
				if($action == ''){
					switch($passBuilder){
						case 'managment':
							include(dirname(dirname(__FILE__)). '/templates/pass-management-grid.php');
							break;
						case 'templates':
							include(dirname(dirname(__FILE__)). '/templates/pass-templates-grid.php');
							break;	
					}
				}else{
					if( $passBuilder == 'templates' && $action == 'create'){
						include(dirname(dirname(__FILE__)). '/templates/create-pass-form.php');
					}
					if( 'templates' === $passBuilder && 'edit' === $action){
						include(dirname(dirname(__FILE__)). '/templates/edit-pass-form.php');
					}
				}
			}			
    		//print_r($urlParams);
		}


	}//@