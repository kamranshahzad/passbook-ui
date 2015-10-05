<?php

	
	class Request{

		
		private $all;
		private $assets;


		public function __construct(){
			$this->all = array();
		}

		public function files($files=array()){
			$this->assets = $files;
		}


		public function all($all=false){
			$submitedValues = array();
			if(isset($_POST)){
				foreach($_POST as $fieldname => $fieldValue ){
					if($all){
						if(!empty($fieldValue)){
							$submitedValues[$fieldname] = $fieldValue;
						}
					}else{
						$submitedValues[$fieldname] = $fieldValue;
					}	 
				}
			}
			$this->all = $submitedValues; 
			return $submitedValues;
		}

		public function getGroups(){
			$groupArray = array();
			$allParams  = array_merge( $this->all , $this->assets );
			foreach($allParams as $fieldName => $fieldValue){
				$fieldArray = explode('_',$fieldName);
				$entity = $fieldArray[0]; 
				$field  = $fieldArray[1];
				$groupArray[$entity][$field] = $fieldValue;
			}
			return $groupArray;
		}







	}//@