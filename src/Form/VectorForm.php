<?php

/**
* @file
* Contains Drupal\laff\Form\VectorForm.
*/

namespace Drupal\laff\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Language\Language;
use Drupal\Core\Form\FormStateInterface;

/**
*  Form controller for the vector entity edit forms.
*
*  @ingroup laff
*/
class VectorForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // @var $entity \Drupal\laff\Entity\Vector
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    $form['langcode'] = array(
      '#title' => $this->t('Language'),
      '#type' => 'language_select',
      '#default_value' => $entity->getUntranslated()->language()->getId(),
      '#languages' => Language::STATE_ALL,
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $form_state->setRedirect('entity.laff_vector.collection');
    $entity = $this->getEntity();
    $entity->save();
  }
}
