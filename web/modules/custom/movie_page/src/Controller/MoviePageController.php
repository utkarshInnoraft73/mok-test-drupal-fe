<?php

namespace Drupal\movie_page\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ToDoList to make the todo list.
 */
class MoviePageController extends ControllerBase {

  /**
   * Public function content to return the todo-list page content.
   *
   * @return array
   *   Return the markup array.
   */
  public function build () {
    return [
      '#type' => 'markup',
    ];
  }

}