<?php

namespace App\Services;

use App\Models\Client;

/**
 * Class ClientService.
 */
class ClientService
{
    public function createClient(array $validatedData) : Object
    {
        $client = new Client();
        $client->fill($validatedData);

        if (!empty($validatedData['profile_image'])) {
            $path = $validatedData['profile_image']->store('public/profile_images');
            $client->profile_image = basename($path);
        }

       $client->save();
       return $client;
    }
}