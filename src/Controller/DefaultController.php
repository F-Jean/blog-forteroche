<?php

namespace Controller;

use Framework\Controller;

class DefaultController extends Controller {
  public function indexAction() {
    $chapters = $this->getDoctrine()->getRepository("Entity\Chapter")->findBy([], array('chapNum' => 'ASC'));
    return $this->render("default/index.html.twig", ["chapters" => $chapters]);
  }
}
