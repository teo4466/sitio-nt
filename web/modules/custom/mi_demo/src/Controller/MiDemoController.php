<?php
/**
 * @file
 * Contains \Drupal\mi_demo\Controller\MiDemoController.
 */

namespace Drupal\mi_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controlador para devolver el contenido de las páginas definidas
 */
class MiDemoController extends ControllerBase {

  public function hello() {
    return [
      '#markup' => '<p>' . $this->t(
          'Hello! This is my first module in Drupal 8!'
        ) . '</p>',
    ];
  }

}
