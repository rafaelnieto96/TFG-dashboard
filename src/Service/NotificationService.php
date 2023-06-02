<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Exception;

class NotificationService
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

    public function getNotificationsList()
    {
        try {
            $response = $this->httpClient->request('GET', $this->apiUrl . '/notifications');
            $data = $response->toArray();

            return $data['hydra:member'];
        } catch (\Exception $exception) {
            // throw new Exception($exception->getMessage());
        }
    }

    public function getOneNotification($id)
    {
        try {
            $response = $this->httpClient->request('GET', $this->apiUrl . '/notifications/' . $id);
            $data = $response->toArray();

            return $data;
        } catch (\Exception $exception) {
            // throw new Exception($exception->getMessage());
        }
    }

    public function createNotification($data)
    {
        try {
            $response = $this->httpClient->request('notification', $this->apiUrl . '/notifications', [
                'json' => $data,
            ]);
            $data = $response->toArray();

            return $data;
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function updateNotification($id, $data)
    {
        try {
            $response = $this->httpClient->request('PUT', $this->apiUrl . '/notifications/' . $id, [
                'json' => $data,
            ]);
            $data = $response->toArray();
    
            return $data;
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $response = $this->httpClient->request('DELETE', $this->apiUrl . '/notifications/' . $id);
            $data = $response->toArray();

            return $data;
        } catch (\Exception $exception) {
            // throw new Exception($exception->getMessage());
        }
    }
}
