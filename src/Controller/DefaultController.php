<?php
/**
 * Created by
 * User: jean
 * Date: 12/08/17
 */

namespace Controller;

use Framework\Controller;

class DefaultController extends Controller {
  public function indexAction() {
    return $this->render("index.html.twig", ["prenom" => "jean"]);
  }
}
