<?php


require_once(dirname(dirname(__FILE__)).'/base/config.php');
require_once(dirname(dirname(__FILE__)).'/base/request.php');
require_once(dirname(dirname(__FILE__)).'/base/files.php');
require_once(dirname(dirname(__FILE__)).'/base/client-api.php');
require_once(dirname(dirname(__FILE__)).'/base/helper.php');
require_once(dirname(dirname(__FILE__)).'/base/debug.php');




class FormHandler{

	private $formAction;

	public function __construct($form_action){
		$this->formAction = $form_action;

	}

	public function handleSubmit(){
		switch($this->formAction){
			case 'createpass':
				$this->createPassAction();
				break;
			case 'modifypass':
				$this->modifyPassAction();
				break;
			case 'removepass':
				$this->removePassAction();
				break;			
			default:
				echo "No form action found";
		}
	}

	public function createPassAction(){

		$localUploadPath  = dirname(__DIR__).DIRECTORY_SEPARATOR.'uploads';
		$randomDir  = Helper::randomDirName();
		$uploadedAssets = Files::uploadPassAssets( $localUploadPath , $randomDir );
		

		$request = new Request();
		$submitedValues = $request->all();
		$request->files($uploadedAssets);
		$groupArray = $request->getGroups();

		//datetime filter
		$relevanceDate = $groupArray['relevance']['couponRelevanceLocationDate'];
		$relevanceTime = $groupArray['relevance']['couponRelevanceLocationTime'];
		$groupArray['relevance']['couponRelevanceLocationDate'] = $relevanceDate.' '.$relevanceTime;

		$headerDate = $groupArray['header']['couponHeaderValueDate'];
		$headerTime = $groupArray['header']['couponHeaderValueTime'];
		$groupArray['header']['couponHeaderValueDate'] = $headerDate.' '.$headerTime;

		$primaryDate = $groupArray['primary']['couponPrimaryFieldValueDate'];
		$primaryTime = $groupArray['primary']['couponPrimaryFieldValueTime'];
		$groupArray['primary']['couponPrimaryFieldValueDate'] = $primaryDate.' '.$primaryTime;


		$secondaryDate1 = $groupArray['secondary']['couponSecondaryFieldValueDateOne'];
		$secondaryTime1 = $groupArray['secondary']['couponSecondaryFieldValueTimeOne'];
		$groupArray['secondary']['couponSecondaryFieldValueDateOne'] = $secondaryDate1.' '.$secondaryTime1;

		$secondaryDate2 = $groupArray['secondary']['couponSecondaryFieldValueDateTwo'];
		$secondaryTime2 = $groupArray['secondary']['couponSecondaryFieldValueTimeTwo'];
		$groupArray['secondary']['couponSecondaryFieldValueDateTwo'] = $secondaryDate2.' '.$secondaryTime2;

		$secondaryDate3 = $groupArray['secondary']['couponSecondaryFieldValueDateThree'];
		$secondaryTime3 = $groupArray['secondary']['couponSecondaryFieldValueTimeThree'];
		$groupArray['secondary']['couponSecondaryFieldValueDateThree'] = $secondaryDate3.' '.$secondaryTime3;

		$secondaryDate4 = $groupArray['secondary']['couponSecondaryFieldValueDateFour'];
		$secondaryTime4 = $groupArray['secondary']['couponSecondaryFieldValueTimeFour'];
		$groupArray['secondary']['couponSecondaryFieldValueDateFour'] = $secondaryDate4.' '.$secondaryTime4;


		$auxiliaryDate1 = $groupArray['auxiliary']['couponAuxiliaryFieldValueDateOne'];
		$auxiliaryTime1 = $groupArray['auxiliary']['couponAuxiliaryFieldValueTimeOne'];
		$groupArray['auxiliary']['couponAuxiliaryFieldValueDateOne'] = $auxiliaryDate1.' '.$auxiliaryTime1;

		$auxiliaryDate2 = $groupArray['auxiliary']['couponAuxiliaryFieldValueDateTwo'];
		$auxiliaryTime2 = $groupArray['auxiliary']['couponAuxiliaryFieldValueTimeTwo'];
		$groupArray['auxiliary']['couponAuxiliaryFieldValueDateTwo'] = $auxiliaryDate2.' '.$auxiliaryTime2;

		$auxiliaryDate3 = $groupArray['auxiliary']['couponAuxiliaryFieldValueDateThree'];
		$auxiliaryTime3 = $groupArray['auxiliary']['couponAuxiliaryFieldValueTimeThree'];
		$groupArray['auxiliary']['couponAuxiliaryFieldValueDateThree'] = $auxiliaryDate3.' '.$auxiliaryTime3;

		$auxiliaryDate4 = $groupArray['auxiliary']['couponAuxiliaryFieldValueDateFour'];
		$auxiliaryTime4 = $groupArray['auxiliary']['couponAuxiliaryFieldValueTimeFour'];
		$groupArray['auxiliary']['couponAuxiliaryFieldValueDateFour'] = $auxiliaryDate4.' '.$auxiliaryTime4;

		unset($groupArray['formAction']);
		$groupArray['myemail'] = (array_key_exists('myemail', $submitedValues )) ? $submitedValues['myemail'] : '';
		

		//remote files upload
		$remoteFiles = array();
		foreach($uploadedAssets as $fieldName => $imageFiles){
			$imageWithPath = $localUploadPath.'/'.$randomDir.'/'.$imageFiles; 
			$remoteFiles[$fieldName.'File'] = '@'.realpath($imageWithPath);
		}
		
		$client = new ClientApi(PASSBUILDER_ADDPASS_URL);
		$client->setData($groupArray);
		$client->crudAction();
		$createResponse = $client->getResponse();
		$responeArray = json_decode($createResponse,true);
		unset($client);


		if(array_key_exists('passid', $responeArray)){
			$remoteFiles['generalid'] = $responeArray['generalid'];
			$remoteFiles['pass_id'] = $responeArray['passid']; 
			$remoteFiles['email']  = $responeArray['email_id']; 
			$client = new ClientApi(PASSBUILDER_ADDPASS_UPLOAD_URL);
			$client->setFiles($remoteFiles);
			$uploadResponse = $client->getResponse();
			$this->rrmdir($localUploadPath.'/'.$randomDir);
			
		}

		wp_redirect( '?pass-builder=templates' ); exit;
	} 

	private function modifyPassAction(){


		$request = new Request();
		$submitedValues = $request->all();

		$COUPON_ID = $submitedValues['coupon_id'];

		$localUploadPath  = dirname(__DIR__).DIRECTORY_SEPARATOR.'uploads';
		$randomDir  = Helper::randomDirName();
		$uploadedAssets = Files::uploadPassAssets( $localUploadPath , $randomDir );
		
		$request->files($uploadedAssets);
		$groupArray = $request->getGroups();

		//datetime filter
		$relevanceDate = $groupArray['relevance']['couponRelevanceLocationDate'];
		$relevanceTime = $groupArray['relevance']['couponRelevanceLocationTime'];
		$groupArray['relevance']['couponRelevanceLocationDate'] = $relevanceDate.' '.$relevanceTime;

		$headerDate = $groupArray['header']['couponHeaderValueDate'];
		$headerTime = $groupArray['header']['couponHeaderValueTime'];
		$groupArray['header']['couponHeaderValueDate'] = $headerDate.' '.$headerTime;

		$primaryDate = $groupArray['primary']['couponPrimaryFieldValueDate'];
		$primaryTime = $groupArray['primary']['couponPrimaryFieldValueTime'];
		$groupArray['primary']['couponPrimaryFieldValueDate'] = $primaryDate.' '.$primaryTime;


		$secondaryDate1 = $groupArray['secondary']['couponSecondaryFieldValueDateOne'];
		$secondaryTime1 = $groupArray['secondary']['couponSecondaryFieldValueTimeOne'];
		$groupArray['secondary']['couponSecondaryFieldValueDateOne'] = $secondaryDate1.' '.$secondaryTime1;

		$secondaryDate2 = $groupArray['secondary']['couponSecondaryFieldValueDateTwo'];
		$secondaryTime2 = $groupArray['secondary']['couponSecondaryFieldValueTimeTwo'];
		$groupArray['secondary']['couponSecondaryFieldValueDateTwo'] = $secondaryDate2.' '.$secondaryTime2;

		$secondaryDate3 = $groupArray['secondary']['couponSecondaryFieldValueDateThree'];
		$secondaryTime3 = $groupArray['secondary']['couponSecondaryFieldValueTimeThree'];
		$groupArray['secondary']['couponSecondaryFieldValueDateThree'] = $secondaryDate3.' '.$secondaryTime3;

		$secondaryDate4 = $groupArray['secondary']['couponSecondaryFieldValueDateFour'];
		$secondaryTime4 = $groupArray['secondary']['couponSecondaryFieldValueTimeFour'];
		$groupArray['secondary']['couponSecondaryFieldValueDateFour'] = $secondaryDate4.' '.$secondaryTime4;


		$auxiliaryDate1 = $groupArray['auxiliary']['couponAuxiliaryFieldValueDateOne'];
		$auxiliaryTime1 = $groupArray['auxiliary']['couponAuxiliaryFieldValueTimeOne'];
		$groupArray['auxiliary']['couponAuxiliaryFieldValueDateOne'] = $auxiliaryDate1.' '.$auxiliaryTime1;

		$auxiliaryDate2 = $groupArray['auxiliary']['couponAuxiliaryFieldValueDateTwo'];
		$auxiliaryTime2 = $groupArray['auxiliary']['couponAuxiliaryFieldValueTimeTwo'];
		$groupArray['auxiliary']['couponAuxiliaryFieldValueDateTwo'] = $auxiliaryDate2.' '.$auxiliaryTime2;

		$auxiliaryDate3 = $groupArray['auxiliary']['couponAuxiliaryFieldValueDateThree'];
		$auxiliaryTime3 = $groupArray['auxiliary']['couponAuxiliaryFieldValueTimeThree'];
		$groupArray['auxiliary']['couponAuxiliaryFieldValueDateThree'] = $auxiliaryDate3.' '.$auxiliaryTime3;

		$auxiliaryDate4 = $groupArray['auxiliary']['couponAuxiliaryFieldValueDateFour'];
		$auxiliaryTime4 = $groupArray['auxiliary']['couponAuxiliaryFieldValueTimeFour'];
		$groupArray['auxiliary']['couponAuxiliaryFieldValueDateFour'] = $auxiliaryDate4.' '.$auxiliaryTime4;

 
		unset($groupArray['formAction']);
		$groupArray['myemail'] = (array_key_exists('myemail', $submitedValues )) ? $submitedValues['myemail'] : '';

				
		$oldImagesArray = array();
		$currentImagesArray = $groupArray['old'];
		if(count($uploadedAssets) > 0){	
			foreach($uploadedAssets as $field => $image){
				$imageField = explode( '_' , $field );
				$oldImage = $currentImagesArray[$imageField[1]];
				if($oldImage != ''){
					$oldImagesArray[$imageField[1]] = $oldImage; 	
				}
			}
		}
		$groupArray['old'] = array_merge($oldImagesArray , $currentImagesArray);
		
		/*if(count($uploadedAssets) > 0){
			$oldImagesArray = array();
			$currentImagesArray = $groupArray['old'];
			foreach($uploadedAssets as $field => $image){
				$imageField = explode( '_' , $field );
				$oldImage = $currentImagesArray[$imageField[1]];
				if($oldImage != ''){
					$oldImagesArray[$imageField[1]] = $oldImage; 	
				}
			}
			$groupArray['old'] = $oldImagesArray; 
		}else{
			unset($groupArray['old']);
		}*/


		//remote files upload
		$remoteFiles = array();
		foreach($uploadedAssets as $fieldName => $imageFiles){
			$imageWithPath = $localUploadPath.'/'.$randomDir.'/'.$imageFiles; 
			$remoteFiles[$fieldName.'File'] = '@'.realpath($imageWithPath);
		}

		$client = new ClientApi(PASSBUILDER_EDITPASS_URL.'/'.$COUPON_ID);
		$client->setData($groupArray);
		$client->crudAction('update');
		$modifyResponse = $client->getResponse();
		$responeArray = json_decode($modifyResponse,true);
		unset($client);

		$responseStatus = (array_key_exists('status', $responeArray)) ? $responeArray['status'] : '';  

		$resOldImagesArray = $responeArray['old_images'];
		$resImagesArray    = $responeArray['images'];
		$removeImagesArray = array();
		$oldImagesString = '';
		foreach($resImagesArray as $fieldName => $imageName ){
			if($imageName != $resOldImagesArray[$fieldName]){
				$removeImagesArray[] = $resOldImagesArray[$fieldName];			
			}
		}

		if(count($removeImagesArray) > 0){
			$oldImagesString = join(',',array_filter($removeImagesArray));
		}

		if($responseStatus == 'ok'){
			
			$remoteFiles['pass_id'] 	= $responeArray['passid']; 
			$remoteFiles['coupon_id'] 	= $responeArray['coupon_id'];
			$remoteFiles['email']  		= $responeArray['email_id'];
			if(count($responeArray['old_images']) > 0){
				$remoteFiles['old_images']  = $oldImagesString;
			}
			
			$client = new ClientApi(PASSBUILDER_EDITPASS_UPLOAD_URL);
			$client->setFiles($remoteFiles);
			$uploadResponse = $client->getResponse();
			
			$this->rrmdir($localUploadPath.'/'.$randomDir);

		}

		wp_redirect( '?pass-builder=templates' ); exit;


	}

	private function removePassAction(){

		$request = new Request();
		$submitedValues = $request->all();
		if(array_key_exists('del', $submitedValues)){
			$delPassArray = $submitedValues['del'];
			$client = new ClientApi(PASSBUILDER_REMOVEPASS_URL);
			$client->setData(array('del_ids'=>$delPassArray));
			$client->crudAction();
			$removeResponse = $client->getResponse();
			unset($client);
			wp_redirect( '?pass-builder=templates' ); exit;
		}else{
			wp_redirect( '?pass-builder=templates' ); exit;	
		}
	}


	//Helper methods
	public function rrmdir($dir) {
   		if (is_dir($dir)) {
     		$objects = scandir($dir);
     		foreach ($objects as $object) {
       			if ($object != "." && $object != "..") {
         			if (filetype($dir."/".$object) == "dir") $this->rrmdir($dir."/".$object); else unlink($dir."/".$object);
       				}
     		}
     		reset($objects);
     		rmdir($dir);
   		}
	}


}//@
