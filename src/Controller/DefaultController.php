<?php

namespace Controller;

use Framework\Controller;

class DefaultController extends Controller {
  public function indexAction() {
    $chapters = $this->getDoctrine()->getRepository("Entity\Chapter")->findAll();
    return $this->render("chapter/display.html.twig", ["chapters" => $chapters]);
  }
}
