<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class Posts{

    public function all(){
        $client = new Client([

            //'base_uri' => 'https://test.conectadosweb.com.co/users/
            'base_uri' => 'https://jsonplaceholder.typicode.com/
            ',
        
           // 'timeout'  => 8.0,
        ]);

        $response = $client->request('GET', 'posts');
        
        return json_decode($response->getBody()->getContents());
    }

    public function find($id){
        $client = new Client([

            'base_uri' => 'https://jsonplaceholder.typicode.com/
            ',
        
           // 'timeout'  => 8.0,
        ]);
        
        $response = $client->request('GET', "posts/{$id}");
        
        return json_decode($response->getBody()->getContents());
    }
}

?>