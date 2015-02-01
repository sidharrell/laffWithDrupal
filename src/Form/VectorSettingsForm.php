<?php

/**
* @file
* Contains Drupal\laff\Form\VectorSettingsForm.
*/

namespace Drupal\laff\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
*  Class VectorSettingsForm.
*  @package Drupal\laff\Form
*  @ingroup laff
*/
class VectorSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   * @return string
   *  The unique string identifying the form.
   */
  public function getFormId() {
    return 'laff_vector_settings';
  }

  /**
   * Form submission handler.
   *
   * @param FormStateInterface $form
   *   An associative array containing the structure of the form.
   * @param array $form_state
   *   An associative array containing the current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }


  /**
   * Define the form used for Vector settings.
   * @return array
   *   Form definition array.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param FormStateInterface $form_state
   *   An associative array containing the current state of the form.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['contact_settings']['#markup'] = 'Manage field settings here.';
    return $form;
  }
}
