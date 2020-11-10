<?php

namespace Drupal\jsonplaceholder\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Class JsonplaceHolderController
 * @package Drupal\jsonplaceholder\Controller
 */
class JsonplaceHolderController extends ControllerBase{

  /**
   * Muestra la hora
   * @return array
   */
  function render(){
    //$date_formatter = \Drupal::service('date.formatter');
    //$date= $date_formatter->format(time(), 'custom', 'Y-m-d H:i:s');
    /*return[
     '#type' => 'markup',
     '#markup' => $date,
    ];*/

    $jsonplaceholder_client= \Drupal::service('jsonplaceholder.jsonplaceholder_client');
    $items= $jsonplaceholder_client->getPosts(10);
    return[
      '#theme' => 'jsonplaceholder_posts',
      '#title' => 'Hello',
      '#items' => $items
    ];


  }

}
