<?php


namespace App;


use GuzzleHttp\Client;
use Psr\Http\Message\ServerRequestInterface as Request;


class ApiDataManager
{
    public const TRIAL_API_URL = 'https://trialapi.craig.mtcdevserver.com/api/properties';
    public const TRIAL_API_KEY = '2S7rhsaq9X1cnfkMCPHX64YsWYyfe1he';

    // GET request params
    public const API_KEY_PARAM = 'api_key';
    public const PAGE_SIZE_PARAM  = 'page[size]';
    public const PAGE_NUMBER_PARAM = 'page[number]';

    /** @var Client */
    private $client;

    /**
     * Application constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function Action() {

        // My time is over, cant get into this action ;[


        //get data from API

        //save data to db


//        $response = $this->client->request('GET');

    }

}