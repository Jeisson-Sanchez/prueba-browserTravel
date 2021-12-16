<?php

namespace App\Service;

use App\Traits\RequestService;
use Exception;

class WeatherService
{
    use RequestService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('app.apiWeather');
        $this->access = config('app.appAccess');
        if(empty($this->baseUri)) throw new Exception('Configuracion incompleta, pendiente variable "URL_API_WEATHER" en Env', 1);
    }

    public function search($code)
    {
        $url = $this->baseUri.$code."?".$this->access;
        return $this->request('GET', $url);        
    }
}