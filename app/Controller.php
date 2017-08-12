<?php
/**
 * Created by
 * User: jean
 * Date: 12/08/17
 */

namespace Framework;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;

/**
 * Class Controller
 * @package Framework
 */
class Controller {
  /**
   * @var \Twig_Environment
   */
  private $twig;

  /**
   * @var EntityManager
   */
  private $doctrine;

  /**
   * Controller constructor.
   */
  public function __construct() {
    $loader = new \Twig_Loader_Filesystem([__DIR__.'/../src/View']);
    $this->twig = new \Twig_Environment($loader, array(
      'cache' => false,
    ));

    $dbParams = array(
        'driver'   => 'pdo_mysql',
        'user'     => "root",
        'password' => "3A30d0_3919&Ceé748E%",
        'dbname'   => "blog-forteroche",
        'charset'  => 'utf8',
    );
    $config = Setup::createAnnotationMetadataConfiguration([__DIR__."/../src/Entity"], false, __DIR__."/../web/cache");
    $config->setAutoGenerateProxyClasses(true);
    $this->doctrine = EntityManager::create($dbParams, $config);
  }

  /**
   * @return EntityManager
   */
  protected function getDoctrine() {
    return $this->doctrine;
  }

  /**
   * @param $filename
   * @param $data
   * @return Response
   */
  protected function render($filename, $data = []) {
    $template = $this->twig->load($filename);
    return new Response($template->render($data));
  }
}
