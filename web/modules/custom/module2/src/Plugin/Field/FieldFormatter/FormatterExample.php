<?php

namespace Drupal\module2\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * @FieldFormatter(
 *   id = "formatter_example",
 *   label = @Translation("Mi primer formateador de campo"),
 *   field_types = {
 *     "text_with_summary"
 *   }
 * )
 */
class FormatterExample extends FormatterBase
{

  public function viewElements(FieldItemListInterface $items, $langcode)
  {
    $elements = [];
    //TODO: Implement viewElements() method.
    return $elements;
  }
}
