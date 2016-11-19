<?php

namespace Drupal\ninghao_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Demo' Block
 *
 * @Block(
 *  id = "ninghao_demo_block",
 *  admin_label = @Translation("Demo"),
 *  category = @Translation("Custom")
 * )
 */
class NinghaoDemoBlock extends BlockBase {

  public function build() {
    return [
      '#markup' => t('hello ~ @name', ['@name' => $this->configuration['name']]),
    ];
  }

  public function defaultConfiguration() {
    return [
      'name' => '',
    ];
  }

  public function blockForm($form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('姓名'),
      '#default_name' => $this->configuration['name'],
    ];
    return $form;
  }

  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['name'] = $form_state->getValue('name');
  }

}
