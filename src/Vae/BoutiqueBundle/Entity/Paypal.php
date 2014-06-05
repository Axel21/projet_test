<?php

namespace Vae\BoutiqueBundle\Entity;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paypal
 *
 * @author Axel
 */
class Paypal {
    
    private $user = 'axel_wilhelmus_api1.gmail.com';
    private $pwd = '1400331789';
    private $signature = 'AFcWxV21C7fd0v3bYYYRCpSSRl31ADNZUD9G7syC6D5nPfHXUp4CRiHJ';
    private $endpoint = 'https://api-3t.sandbox.paypal.com/nvp';
    public $errors = array();
    
    public function __construct($user = false, $pwd = false, $signature = false) {
        
        if($user){
            $this->user = $user;
        }
        
        if($pwd){
            $this->user = $pwd;
        }
        
        if($signature){
            $this->user = $signature;
        }
    }
    
    public function request($method, $params){
        
        $params = array_merge($params, array(
                
                    'METHOD' => $method,
                    'VERSION' => '114',
                    'USER' => $this->user,
                    'SIGNATURE' => $this->signature,
                    'PWD' => $this->pwd
        ));
        
        $params = http_build_query($params);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            
                CURLOPT_URL => $this->endpoint,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $params,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_VERBOSE => true
                
        ));
        
        $response = curl_exec($curl);
        $responseArray = array();
        parse_str($response, $responseArray);
        if(curl_errno($curl)){
            
            $this->errors = curl_error($curl);
            curl_close($curl);
            return false; 
        }
        else{
            if($responseArray['ACK'] == 'Success'){
                
                curl_close($curl);
                return $responseArray;
            }
            else{
                
                $this->errors = $responseArray;
                curl_close($curl);
                return false;
            }
        }
    }
}

?>
