<?php

require 'vendor\autoload.php'; 
use GuzzleHttp\Client;


   $client = new Client();

    $response = $client->request(
        'POST',
        'https://jsonplaceholder.typicode.com/posts',

          [
            'json'=> [
                'title' =>'new title using rest api  ',
                'body' =>'new body  using rest api  ',
                'userId'=>7
              ]
          ]
        
         
    ); 
    
      echo $response->getBody();



?>