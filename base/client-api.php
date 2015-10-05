<?php


	class ClientApi{

		private $apiUrl;
		private $curlHandler;
		private $apiReponse;
		private $jsonData;

		public function __construct($api_url){
			if(empty($api_url)) return;

			$this->apiUrl 		= $api_url;
			$this->curlHandler 	= curl_init($this->apiUrl);
		}

		public function setData($dataArray= array()){
			if(count($dataArray) < 0) return;
			$this->jsonData = json_encode($dataArray);
		}

		public function crudAction($action='create'){
			switch($action){
				case 'create':
					curl_setopt( $this->curlHandler , CURLOPT_CUSTOMREQUEST, "POST" );
					break;
				case 'update':
					curl_setopt( $this->curlHandler , CURLOPT_CUSTOMREQUEST, "PUT" );
					break;
				case 'read':
					curl_setopt( $this->curlHandler , CURLOPT_CUSTOMREQUEST, "GET" );
					break;
				case 'delete':
					curl_setopt( $this->curlHandler , CURLOPT_CUSTOMREQUEST, "DELETE" );
					break;						
			}
			if(!empty($this->jsonData)){
				curl_setopt($this->curlHandler , CURLOPT_POSTFIELDS, $this->jsonData );	
			}			                                                                  
      		curl_setopt($this->curlHandler , CURLOPT_RETURNTRANSFER, true);                                                                      
      		curl_setopt($this->curlHandler , CURLOPT_HTTPHEADER, array(                                                                          
          				'Content-Type: application/json',                                                                                
          				'Content-Length: ' . strlen($this->jsonData))                                                                       
      		);
      		$this->apiReponse = curl_exec($this->curlHandler );
      		if($errno = curl_errno($this->curlHandler)) {
    			$error_message = curl_strerror($errno);
    			echo "cURL error ({$errno}):\n {$error_message}";
			}
      		curl_close($this->curlHandler);
		}


		public function setFiles($files){
			curl_setopt( $this->curlHandler , CURLOPT_CUSTOMREQUEST, "POST" );
			curl_setopt( $this->curlHandler , CURLOPT_POSTFIELDS, $files );
			curl_setopt($this->curlHandler , CURLOPT_RETURNTRANSFER, true);
			/*curl_setopt($this->curlHandler , CURLOPT_HTTPHEADER, array(                                                                          
          				'Content-Type: application/json')                                                                     
      		);*/
      		$this->apiReponse = curl_exec($this->curlHandler );
      		curl_close($this->curlHandler);
		}




		public function getResponse(){
			return $this->apiReponse;
		}

		public function ping(){
			echo strlen($this->jsonData);
		}

	}//@