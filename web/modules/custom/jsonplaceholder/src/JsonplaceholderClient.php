<?php

namespace Drupal\jsonplaceholder;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Http\ClientFactory;
use GuzzleHttp\Exception\RequestException;

/**
 * Class JsonplaceholderClient
 * @package Drupal\jsonplaceholder
 */
class JsonplaceholderClient {

  /**
   * The HTTP client
   * @var \GuzzleHttp\ClientInterface
   */
  protected $client;

  public function __construct(ClientFactory $http_client_factory){
    $this->client = $http_client_factory->fromOptions([
    'base_uri' => 'http://jsonplaceholder.typicode.com',
    'timeout' => 3
    ]);
  }

  /**
   * Get posts from the jsonplaceholder webpage.
   */
  public function getPosts($numele){

     $response= $this->client->get('posts');
     $body = $response->getBody();
    // Devuelve el filtrado de los datos que llegan decodificados
    //json_decode();
    $items = Json::decode($body);
   return array_slice($items,0,$numele);
  }


}
