<?php

namespace App\ServiceProvider;

use GuzzleHttp\Client;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class StarWarsApiClientProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['swapi_client'] = new Client(['base_uri' => 'https://swapi.co/api/']);
    }
}
