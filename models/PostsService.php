<?php

namespace app\models;

use yii\httpclient\Client;

class PostsService 
{

    private static function getApiUrl(){
        //TODO esto debería estar en un archivo de variables de entorno como .env o similar
        return 'https://jsonplaceholder.typicode.com/posts';
    }


    //obtiene los post desde la API
    public static function getPosts(){
        $posts = [];
        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl(self::getApiUrl())
            ->send();

        if ($response->isOk) {
            $posts = $response->data;
        } 

		return $posts;
    }
    
}