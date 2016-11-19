<?php

namespace Drupal\ninghao_demo\Controller;
use Drupal\Core\Controller\ControllerBase;

class NinghaoDemoController extends ControllerBase {
  public function page_content() {
    return [
      '#markup' => t('这是一个来自模块的自定义页面'),
    ];
  }
}
