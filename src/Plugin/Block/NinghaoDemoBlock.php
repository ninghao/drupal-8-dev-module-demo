<?php

namespace Drupal\ninghao_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

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

  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIf($account->isAnonymous());
  }

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
