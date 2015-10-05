<?php

	if(!defined('PASS_MANAGER_VER'))
  		define('PASS_MANAGER_VER', '1.0');


  	define('ICL_LANGUAGE_CODE' , 'en');




  	define('APPPASS_ENV','dev');

  	
  	if(APPPASS_ENV == 'dev'){
  		
  		define('BASE_API_URL','local_url');

		//create pass
		define('PASSBUILDER_ADDPASS_URL','local_url/api/createpass');
		define('PASSBUILDER_ADDPASS_UPLOAD_URL','local_url/api/createpass/uploads');

		//modify pass
		define('PASSBUILDER_EDITPASS_URL','local_url/api/modifypass');
		define('PASSBUILDER_EDITPASS_UPLOAD_URL','local_url/api/modifypass/uploads');	

		//remove passes
		define('PASSBUILDER_REMOVEPASS_URL','local_url/api/removepasses');

		//replicate pass
		define('PASSBUILDER_REPLICATEPASS_URL','local_url/api/replicatepass');

		// publish/un-publish pass
		define('PASSBUILDER_PUBLISHPASS_URL','local_url/api/publishpass');

		// get pass
		define('PASSBUILDER_ALLPASSES_URL','local_url/api/getallpasses');
		define('PASSBUILDER_PASSLIST_URL','local_url/api/getpasslist');
		define('PASSBUILDER_PASSLIST_BYID_URL','local_url/api/getpasslistbyid');
		
		//get passname format
		define('PASSBUILDER_PASSNAME_FORMAT_URL','local_url/api/getpassnameformat');

  	}else{

  		//base url
		define('BASE_API_URL','live_url');

		//create pass
		define('PASSBUILDER_ADDPASS_URL','live_url/api/createpass');
		define('PASSBUILDER_ADDPASS_UPLOAD_URL','live_url/api/createpass/uploads');

		//modify pass
		define('PASSBUILDER_EDITPASS_URL','live_url/api/modifypass');
		define('PASSBUILDER_EDITPASS_UPLOAD_URL','live_url/api/modifypass/uploads');	

		//remove passes
		define('PASSBUILDER_REMOVEPASS_URL','live_url/api/removepasses');

		//replicate pass
		define('PASSBUILDER_REPLICATEPASS_URL','live_url/api/replicatepass');

		// publish/un-publish pass
		define('PASSBUILDER_PUBLISHPASS_URL','live_url/api/publishpass');

		// get pass
		define('PASSBUILDER_ALLPASSES_URL','live_url/api/getallpasses');
		define('PASSBUILDER_PASSLIST_URL','live_url/api/getpasslist');
		define('PASSBUILDER_PASSLIST_BYID_URL','live_url/api/getpasslistbyid');

		//get passname format
		define('PASSBUILDER_PASSNAME_FORMAT_URL','live_url/api/getpassnameformat');

  	}

	
	
	



