<?php

require_once(dirname(dirname(__FILE__)).'/base/config.php');
require_once(dirname(dirname(__FILE__)).'/base/client-api.php');
require_once(dirname(dirname(__FILE__)).'/base/debug.php');
	
class GetLists{


	public static function getPassNameFormat($currentUserId){

		$apiUrl = PASSBUILDER_PASSNAME_FORMAT_URL.'/'.$currentUserId;
		$client = new ClientApi($apiUrl);
		$client->crudAction('read');
		$getResponse = $client->getResponse();
		unset($client);
		$dataArray = json_decode($getResponse, true);

		return $dataArray;
	}


	public function getPassTemplates($userId=0){

		
		$current_role = Helper::getRole();
		//$apiUrl = ($current_role == 'administrator') ? PASSBUILDER_ALLPASSES_URL : PASSBUILDER_PASSLIST_URL.'/'.$userId;
		$apiUrl = PASSBUILDER_PASSLIST_URL.'/'.$userId;

		$client = new ClientApi($apiUrl);
		$client->crudAction('read');
		$getResponse = $client->getResponse();
		unset($client);
		//echo $getResponse;
		$dataArray = json_decode($getResponse, true);

		return $dataArray;
	}

	public function getCustomerPassTemplates($userId=0){
	
		$current_role = Helper::getRole();
		$apiUrl = PASSBUILDER_PASSLIST_URL.'/'.$userId;

		$client = new ClientApi($apiUrl);
		$client->crudAction('read');
		$getResponse = $client->getResponse();
		unset($client);
		//echo $getResponse;
		$dataArray = json_decode($getResponse, true);

		return $dataArray;
	}


}