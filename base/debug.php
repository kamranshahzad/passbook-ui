<?php


	class Debug{

		public static function showArray($array){
			if(count($array) > 0){
				echo '<pre>';
				print_r($array);
				echo '</pre>';
			}
		}

	}
