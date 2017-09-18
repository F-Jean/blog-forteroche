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
  public function __construct()
  {
    $loader = new \Twig_Loader_Filesystem([__DIR__.'/../../src/View']);
    $this->twig = new \Twig_Environment($loader, array(
      'cache' => false,
    ));
  }

  /**
   * @return \Twig_Environment
   */
  public function getTwig()
  {
    return $this->twig;
  }
}
