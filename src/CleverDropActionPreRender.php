<?php

namespace Drupal\cleverdrop;

use Drupal\Core\Render\Element\RenderCallbackInterface;

/**
 * Provides a trusted callback
 */
class CleverDropActionPreRender implements RenderCallbackInterface {

  /**
   * Sets Olla common - #pre_render callback.
   */
  public static function preRender($element) {
    unset($element['#type']);
    unset($element['#theme_wrappers']);
    $element['#theme'] = 'actions_wrapper';

    return $element;
  }

}
