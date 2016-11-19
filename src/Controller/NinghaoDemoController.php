<?php

namespace Drupal\ninghao_demo\Controller;
use Drupal\Core\Controller\ControllerBase;

class NinghaoDemoController extends ControllerBase {
  public function page_content($page_id) {
    return [
      '#markup' => t('这是一个来自模块的自定义页面：@page_id', ['@page_id' => $page_id]),
    ];
  }
}
