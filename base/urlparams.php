<?php

class UrlParams{

  private $requestUri;

  public function __construct(){
    $this->requestUri = parse_url($_SERVER['REQUEST_URI']);    
  }

  public function getQueryString(){
    if(array_key_exists('query', $this->requestUri )) return $this->requestUri['query'];  
  }


  public function getQueryArray(){
    $parmsArr = array();
    $vars = $this->getQueryString();
    if($vars != ''){
        parse_str($this->getQueryString() , $parmsArr);
    }
    return $parmsArr;
  }



}//@