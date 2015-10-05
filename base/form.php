<?php

	
	
	class ParentForm{
		public function getAttributs($attr=array()){
	        $array = array();
	        foreach ($attr as $key => $value) {
	            $array[] = ($value == 1) ? $key : $key.'="'.$value.'"'; 
	        }
	        return join(' ',$array);
	    }
	}




	

	
	class Form extends ParentForm{
		

		public static function input( $type , $fieldId , $value='' , $attr = array() ){
			return sprintf('<input type="%s" id="%s" name="%s" value="%s" %s>', $type , $fieldId , $fieldId , $value , self::getAttributs($attr));
		}

		public static function textarea( $fieldId , $value='' , $attr = array() ){
			return sprintf(
				'<textarea name="%s" id="%s" %s>%s</textarea>',
					 $fieldId , $fieldId , self::getAttributs($attr) , $value 
				);
		}

		public static function radioButton(){

		}

		public static function checkbox($fieldId, $isSelected=false , $attr = array() ){
			$checked = ($isSelected) ? 'checked' : '';
			return sprintf('<input type="checkbox" id="%s" name="%s" value="1" %s %s>'
				, $fieldId , $fieldId,self::getAttributs($attr) , $checked
				);
		}

		public static function select($fieldId , $fillerArray , $selectedValue = '' , $attr = array()){
			if(count($fillerArray) < 0) return;
			$html = sprintf('<select id="%s" name="%s" %s>',$fieldId, $fieldId,self::getAttributs($attr));
			foreach($fillerArray as $key=>$value){
				$html .= ($selectedValue == $key) ? sprintf('<option value="%s" selected="selected">%s</option>',$key, $value) : sprintf('<option value="%s">%s</option>',$key, $value); 
			}
			$html .= '<select>';
			return $html;
		}

		public static function button($buttonId , $buttonLabel ="submit"){
			return sprintf('<button id="%s" name="%s" value="%s">',$buttonId,$buttonId,$buttonLabel );
		}


	}


	// maxlength="100" required="required"