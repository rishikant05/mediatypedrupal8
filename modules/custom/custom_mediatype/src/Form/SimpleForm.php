<?php

namespace Drupal\custom_mediatype\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SimpleForm extends FormBase {

  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['actions'] = [
      '#type' => 'actions',
    ];

    // Add a submit button that handles the submission of the form.
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  public function getFormId() {
    return 'custom_mediatype_simple_form';
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message(t('form is submitted successfully'));
  }

}
