<?php

require 'vendor\autoload.php'; 
use GuzzleHttp\Client;


   $client = new Client();

   try {
    $response = $client->request(
        'GET',
        'https://jsonplaceholder.typicode.com/posts/kdfsjkf'
    );

   } catch (\GuzzleHttp\Exception\RequestException $e) {
    //throw $th;
         echo $e->getCode().'\r\n';
         echo $e->getMessage().'\r\n';
   } catch (\GuzzleHttp\Exception\ServerException $e) {
    //throw $th;
         echo $e->getCode().'\r\n';
         echo $e->getMessage().'\r\n';
   }

       



?>