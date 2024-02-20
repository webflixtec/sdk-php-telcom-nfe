<?php

namespace Telcom\Exceptions;

use Exception;

class TelcomException extends Exception{
    
    public function __construct(Exception $ex) {
        $message = $ex->getMessage() . ' <> ' . $ex->getTraceAsString();        
        parent::__construct($message, $ex->getCode(), $ex->getPrevious());
    }
    
    public static function fromObjectMessage($message, $code, $previous = null){
        
        if(is_array($message)){
            
            $newMessageString = [];
            
            foreach($message as $error){
                $newMessageString[] =  $error;
            }                           
            
            return new TelcomException( new Exception(implode("\n", $newMessageString), $code, $previous) );     
        }
        
        if(is_string($message)){
            
            return new TelcomException( new Exception($message, $code, $previous) );     
            
        }
        
    }
    
}
