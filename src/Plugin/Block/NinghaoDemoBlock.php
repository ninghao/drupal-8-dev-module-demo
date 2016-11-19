<?php

namespace Drupal\ninghao_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

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
      '#markup' => t('hello ~'),
    ];
  }

}
