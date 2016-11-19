<?php

namespace Drupal\ninghao_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Unicode;

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
    if (!$form_state->isValueEmpty('name')) {
      if (Unicode::strlen($form_state->getValue('name')) < 2) {
        $form_state->setErrorByName('name', t('姓名 必须使用两个或以上的字符'));
      }
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {

  }
}
