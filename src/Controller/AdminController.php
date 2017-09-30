<?php

namespace Controller;

use Entity\Admin;
use Framework\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class AdminController
 * @package Controller
 */
class AdminController extends Controller
{
  public function loginAction(Request $request) {
    if($request->getMethod() == "POST") {
      $this->get("session_manager")->set($request->request->all());
      return $this->redirect("homepage");
    }
    return $this->render("admin/login.html.twig");
  }
}
