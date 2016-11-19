<?php

namespace Drupal\ninghao_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class NinghaoDemoForm extends FormBase {
  public function getFormId() {
    return 'ninghao_demo_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('姓名'),
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('保存'),
    ];

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  public function submitForm(array &$form, FormStateInterface $form_state) {

  }
}
