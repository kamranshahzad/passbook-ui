<?php


/*
Plugin Name: Wordpress Passbook App
Description: This plugin will provide front-end for Passbook Application.
Version: 1.0.0
Author: Kamran Shahzad (bleak.unseen@gmail.com)
*/


require_once('base/form.php');
require_once('base/config.php');
require_once('base/form-handler.php');
require_once('base/action-handler.php');
require_once('base/helper.php');
require_once('base/urlparams.php');
require_once('base/debug.php');



function passmanager_scripts($hook){

	$cssFiles = array(
		'bootstrap'=> plugins_url('/vendor/bootstrap/css/bootstrap-alter.css', __FILE__),
		'file-uploads'=> plugins_url('/assets/css/file-uploads.css', __FILE__),
		'minicolors' => plugins_url('/assets/jquery-minicolors-master/jquery.minicolors.css', __FILE__),
		'pass-styles'=> plugins_url('/assets/css/pass-styles.css', __FILE__),
    'datepicker'=> plugins_url('/vendor/datetimepicker/jquery.datetimepicker.css', __FILE__),
		);

	$jsFiles = array(
		'bootstrap'=> plugins_url('/vendor/bootstrap/js/bootstrap.min.js', __FILE__),
		'minicolor'=> plugins_url('/assets/jquery-minicolors-master/jquery.minicolors.js',__FILE__),
		'tab' => plugins_url('/vendor/bootstrap/js/tab.js', __FILE__),
    'tooltip' => plugins_url('/vendor/bootstrap/js/tooltip.js', __FILE__),
		'file-uploads' => plugins_url('/assets/js/file-uploads.js', __FILE__),
		'geocomplete'=> plugins_url('/assets/js/jquery.geocomplete.js', __FILE__),
		'functionality'=> plugins_url('/assets/js/functionality.js', __FILE__),
    'editfunctionality'=> plugins_url('/assets/js/editfunctionality.js', __FILE__),
    'datepicker'=> plugins_url('/vendor/datetimepicker/jquery.datetimepicker.js', __FILE__),
		);
	foreach($cssFiles as $fileKey => $filePath){
		wp_enqueue_style( $fileKey , $filePath);
	}
	
	wp_enqueue_script( 'google', 'http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places', 'jquery', false );

	foreach($jsFiles as $fileKey => $filePath){
		wp_enqueue_script($fileKey , $filePath , array('jquery'));
	}
}
add_action( 'wp_enqueue_scripts', 'passmanager_scripts', 10  );


function prefix_passbuilder_rewrite_rule($rules) {
    add_rewrite_rule( 'pass-builder/([^/]+)', 'index.php?pass-builder=$matches[1]', 'top' );
} 
add_action( 'init', 'prefix_passbuilder_rewrite_rule' );


function passbuilder_template($template) { 
    $url = new UrlParams();
    $current_role = Helper::getRole();
    $urlParams = $url->getQueryArray();
    if(array_key_exists('pass-builder', $urlParams )){
        if ( is_user_logged_in() ) {

          if($current_role != ''){
              // form submit handle here
              if($_POST['formAction']){
                $handler = new FormHandler($_POST['formAction']);
                $handler->handleSubmit();
              }
              if($_GET['action']){
                  $handler = new ActionHandler($_GET['action']);
                  $handler->fireAction();
              } 
              return dirname(__FILE__) . '/templates/page-pass-template.php';
          }else{
            return dirname(__FILE__) . '/templates/page-permission-exceptions.php';
          }
        }else{

          $loginUrl = (ICL_LANGUAGE_CODE == 'en') ? get_site_url().'/log-in/' : get_site_url().'/da/log-in-2/';
          wp_redirect($loginUrl);

        } 
    }
    return $template;
}
add_filter('template_include', 'passbuilder_template', 1, 1);




function passbuilder_app_nav( $items, $menu, $args ) {
    $menuOptions = array(
        array(
          'url'=>'?pass-builder=managment',
          'title' => 'Manage Passes',
          'order' => 1
          ),
        array(
          'url'=>'?pass-builder=templates',
          'title' => 'Pass Templates',
          'order' => 2
          )
      );
    if ( is_user_logged_in() ) {
      foreach($menuOptions as $menuItems){
          $new_item = new stdClass;
          $new_item->url = $menuItems['url'];
          $new_item->title = $menuItems['title'];
          $new_item->menu_order = $menuItems['order'];
          $items[] = $new_item;      
      }
    }

  return $items;
}


function mcouponpassbookApp_ShortCut() {
  ob_start();
  include(dirname(dirname(__FILE__)). '/passbook-app/templates/create-pass-form.php');
  $string = ob_get_clean();
  return $string;
}




if ( (isset($_GET['action']) && $_GET['action'] != 'logout') || (isset($_POST['login_location']) && !empty($_POST['login_location'])) ) {
        add_filter('login_redirect', 'my_login_redirect', 10, 3);
        function my_login_redirect() {
                $location = $_SERVER['HTTP_REFERER'];
                wp_safe_redirect($location);
                exit();
        }
}


function myscript() {
    if( wp_script_is( 'jquery', 'done' ) ) {
    ?>
    <script type="text/javascript">
      jQuery(function($){
      	//console.log('Here is the output');
	     });//@	
    </script>
    <?php
    }
}
add_action( 'wp_footer', 'myscript' );
