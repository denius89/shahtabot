<?php
use GuzzleHttp\Client;
class TelegramBot
{
    protected $token = "602662764:AAF-cFBdYF2lEWR5HKdMdu66zqYmKI2Rf68";

    protected function query($method, $params = [])
    {
        $url = "https://api.telegram.org";

        $url .= $this->token;

        $url .= "/" . $method;

        if (!empty($params)) {
            $url .= "?" . http_build_query($params);
        }

        $client = new Client([
            'base_url' => $url
        ]);

        $result = $client->request('GET');

        return json_decode($result->getBody());

    }

    public function getUpdates()
    {

        $response = $this->query('GetUpdates');

        return $response->result;

    }

    public function sendMessage()
    {

    }


}