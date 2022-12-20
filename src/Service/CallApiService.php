<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;


class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        
    }

    public function getFranceData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://127.0.0.1:8000/api/fournisseurs', 
            [
                'verify_peer' => false
                ]
        );

        return $response->toArray();
    }
}


 
