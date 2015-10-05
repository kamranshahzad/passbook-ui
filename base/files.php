<?php

	

	class Files
	{

		
		public static function uploadPassAssets( $localPath , $randomDirName ){
			$uploadedFiles = array();
			if(count($_FILES) > 0){
				foreach($_FILES as $fileField=>$file){
					if($file['name']){
						$uploadPath = $localPath.DIRECTORY_SEPARATOR.$randomDirName;
						@mkdir($uploadPath , 0777, true);
						$randomString  = sha1(uniqid(mt_rand(), true));					
						$fileExtention = pathinfo($_FILES[$fileField]["name"],PATHINFO_EXTENSION);
						$fileName = $randomString.'.'.$fileExtention;
						$filePath = $uploadPath.DIRECTORY_SEPARATOR.$fileName;
						move_uploaded_file( $_FILES[$fileField]["tmp_name"] , $filePath );					
						$imageField = str_replace('File','',$fileField);
						$uploadedFiles[$imageField] = $fileName;
					}		
				}	
			}
			return $uploadedFiles;
		}




		public static function removeAssetsDir($localPath , $randomDirName){
			if(is_dir()){
				
			}
		}


	}//@
