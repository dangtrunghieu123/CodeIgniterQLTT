




<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('callAPI'))
{
    function callAPI($service_url,$curl_post_data)
        {
            
        $curl = curl_init($service_url);
        $headers = array();
        $headers[] = 'Accept:application/json';
        $headers[] = 'Content-Type:application/json';
        $headers[] = 'x-access-token:'."hello.insternship";
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        $kq=$curl_response;
        curl_close($curl);
        $info=json_decode($kq);
        return $info;
    }  
  
}

