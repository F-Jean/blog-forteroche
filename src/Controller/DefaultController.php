<?php
/**
 * Created by
 * User: jean
 * Date: 12/08/17
 */

namespace Controller;

use Framework\Controller;

class DefaultController {
  public function indexAction() {
    return $this->render();
  }
}
