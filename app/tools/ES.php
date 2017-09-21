<?php
/**
 * Created by PhpStorm.
 * User: wonbin
 * Date: 2017/9/9
 * Time: 16:23
 */

use Elasticsearch\ClientBuilder;

class ES
{
    public $params;
    public $client;

    private $host = Array('127.0.0.1:9200');

    public function __construct()
    {
        $this->params['hosts'] = [
            '127.0.0.1:9200'
        ];
    }

    public function search() {
        $client = ClientBuilder::create()->setHosts($this->host)->build();

        echo '<pre>';

        $params = [
            'index'     =>  'my_index',
            'type'      =>  'my_type',
            'id'        =>  'my_id',
            'body' => ['testField' => 'abc']
        ];
        $response = $client->index($params);
        print_r($response);

    }

}