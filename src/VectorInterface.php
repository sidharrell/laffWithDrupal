<?php
/**
 * @file
 * Contains \Drupal\laff\VectorInterface.
 */

namespace Drupal\laff;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a Vector entity.
 * @ingroup laff
 */
interface VectorInterface extends ContentEntityInterface, EntityOwnerInterface {

}
