<?php

/**
 * Mf Result
 * @copyright Thibaut Latouche, 2015
 * @author Thibaut Latouche
 */
class MfResult{

    public $isSuccess;
    private $data;
    private $errorMessage;
    
    /**
     * Default Constructor
     */
    public function __construct(){
        $this->isSuccess = true;
    }
    
    /**
     * Set Data
     * @param mixed $data
     */
    public function setData($data){
        $this->data = $data;
    }
    
    /**
     * Get Data
     * @param boolean $json
     * @return string|mixed
     */
    public function getData($json = false){
        return ($json) ? json_encode(array("data" => $this->data)) : $this->data;
    }
    
    /**
     * On Error
     * @param Exception $e
     */
    public function onError(Exception $e){
        $this->isSuccess    = false;
        $this->errorMessage = $e->getMessage();
    }
    
    /**
     * Get Error Message
     * @return string
     */
    public function getErrorMessage(){
      return $this->errorMessage;
    }
    
       
    /**
     * To Json
     * Encapse object in JSON Array
     * @return string
     */
    public function toJSON(){
        $var = array(
        "isSuccess"    => $this->isSuccess,
                "data"         => $this->data,
     "errorMessage" => $this->errorMessage
        );
       return json_encode($var);
    }
    
}