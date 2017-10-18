<?php

namespace Framework\Container;

/**
 * Class Templating
 * @package Framework\Container
 */
class Templating
{
  /**
   * @var \Twig_Environment
   */
  private $twig;

  /**
   * Templating constructor.
   */
  public function __construct(UserSession $userSession = null)
  {
    $loader = new \Twig_Loader_Filesystem([__DIR__.'/../../src/View']);
    $this->twig = new \Twig_Environment($loader, array(
      'cache' => false,
    ));
    if ($userSession == null) {
    $this->twig->addGlobal("session", null);
    } else {
      $this->twig->addGlobal("session", $userSession->getAdmin());
    }
  }

  /**
   * @return \Twig_Environment
   */
  public function getTwig()
  {
    return $this->twig;
  }
}
