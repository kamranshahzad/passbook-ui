<?php


class ActionHandler{

	private $action;	

	public function __construct($action){
		$this->action = $action;
	}

	public function fireAction(){
		switch($this->action){
			case 'replicate':
				$this->replicatePassAction();
				break;
			case 'publish':
				$this->publishPassAction();
				break;
			default:
				echo("No action defined");	
		}
	}

	private function replicatePassAction(){
		
		$PASS_ID = $_GET['id'];
		$client = new ClientApi(PASSBUILDER_REPLICATEPASS_URL.'/'.$PASS_ID);
		$client->crudAction('read');
		$getResponse = $client->getResponse();
		unset($client);

		wp_redirect( '?pass-builder=templates' ); exit;	
	}

	private function publishPassAction(){
		$PASS_ID = $_GET['id'];
		$STATUS  = $_GET['status'];
		$client = new ClientApi( PASSBUILDER_PUBLISHPASS_URL.'/'.$STATUS);
		$client->setData(array('coupon_id'=>$PASS_ID));
		$client->crudAction('update');
		$updateResponse = $client->getResponse();
		unset($client);

		wp_redirect( '?pass-builder=templates' ); exit;
	}

}//@