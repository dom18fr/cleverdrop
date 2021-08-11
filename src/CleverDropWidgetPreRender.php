<?php

namespace Drupal\cleverdrop;

use Drupal\Core\Render\Element\RenderCallbackInterface;

/**
 * Provides a trusted callback
 */
class CleverDropWidgetPreRender implements RenderCallbackInterface {

  /**
   * Sets Olla common - #pre_render callback.
   */
  public static function preRender($element) {
    unset($element['#type']);
    unset($element['#theme_wrappers']);
    $element['#theme'] = 'widget_wrapper';

    return $element;
  }

}
