<?php

/**
* @file
* Contains \Drupal\laff\Entity\Controller\VectorListBuilder
*/

namespace Drupal\laff\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
*  Provides a list controller for vector entity.
*
*  @ingroup laff
*/
class VectorListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('VectorID');
    $header['name'] = $this->t('Name');
    $header['elements'] = $this->t('Vector Elements');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\laff\Entity\Vector */
    $row['id'] = $entity->id();
    $row['name'] = $entity->link();
    $row['elements'] = $entity->elements->value;
    return $row + parent::buildRow($entity);
  }

}
