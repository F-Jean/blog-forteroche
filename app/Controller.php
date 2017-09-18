<?php

namespace Framework;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class Controller
 * @package Framework
 */
class Controller {
  /**
   * Controller constructor.
   */
  public function __construct()
  {
    global $container;
    $this->container = $container;
  }

  /**
   * @param $name
   */
  public function get($name)
  {
    return $this->container->get($name);
  }

  /**
   * @return EntityManager
   */
  protected function getDoctrine() {
    return $this->container->get("doctrine")->getManager();
  }

  /**
   * @param $filename
   * @param $data
   * @return Response
   */
  protected function render($filename, $data = []) {
    $template = $this->container->get("templating")->getTwig()->load($filename);
    return new Response($template->render($data));
  }

  /**
   * @param $route
   * @param array $args
   */
  protected function redirect($route, $args = [])
  {
    $generator = new UrlGenerator($this->container->getParameter("routes"), $this->container->get("context"));
    return new RedirectResponse($generator->generate($route,$args));
  }
}
