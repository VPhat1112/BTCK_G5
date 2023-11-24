<?php
// Example: app/Services/CityApiService.php

namespace App\Services;

use GuzzleHttp\Client;

class provincesApiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://provinces.open-api.vn',
            'timeout'  => 10,
            // Add other Guzzle options if needed
        ]);
    }

    public function getCities()
    {
        try {
            $response = $this->client->get('/api/p/cities');
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            // Handle API errors
            return ['error' => $e->getMessage()];
        }
    }

    public function getDistricts()
    {
        try {
            $response = $this->client->get("/api/p/districts");
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            // Handle errors
            return ['error' => $e->getMessage()];
        }
    }

    public function getWards()
    {
        try {
            $response = $this->client->get("/api/p/wards");
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            // Handle errors
            return ['error' => $e->getMessage()];
        }
    }
}
