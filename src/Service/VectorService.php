<?php

/**
* @file
* Contains
*/

namespace Drupal\laff\Service;

use Drupal\laff\Entity\Vector;

/**
*
*/
class VectorService {

  /**
   *
   */
  public function scale(Vector $Vector, float $scalar) {
    $elements = explode(",", $Vector->elements->value);
    foreach( $elements as &$element) {
      trim($element);
      $element *= $scalar;
    }
    $Vector->elements->value = implode(", ", $elements);
    $Vector->save();
  }

}
