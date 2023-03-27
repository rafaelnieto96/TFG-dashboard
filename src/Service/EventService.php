<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;

class EventService
{
    private $apiUrl;
    private $httpClient;

    public function __construct(string $apiUrl)
    {
        $this->apiUrl = $apiUrl;
        $this->httpClient = HttpClient::create([
            'verify_peer' => false,
            'verify_host' => false,
        ]);
    }

    public function getEvents()
    {
        try {
            $response = $this->httpClient->request('GET', $this->apiUrl . '/events');
            $data = $response->toArray();

            return $data['hydra:member'];
        } catch (\Throwable $th) {
            //If server is down, do nothing;
        }
    }
}
