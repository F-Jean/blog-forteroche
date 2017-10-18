<?php

namespace Framework\Container;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

/**
 * Class Doctrine
 * @package Framework\Container
 */
class Doctrine
{
  /**
   * @var EntityManager
   */
  private $manager;

  /**
   * Doctrine constructor.
   */
  public function __construct()
  {
    $dbParams = array(
        'driver'   => 'pdo_mysql',
        'user'     => "root",
        'password' => "3A30d0_3919&Ceé748E%",
        'dbname'   => "blog-forteroche",
        'charset'  => 'utf8',
    );
    $config = Setup::createAnnotationMetadataConfiguration([__DIR__."/../src/Entity"], false, __DIR__."/../../web/cache");
    $config->setAutoGenerateProxyClasses(true);
    $this->manager = EntityManager::create($dbParams, $config);
  }

  /**
   * @return EntityManager
   */
  public function getManager()
  {
    return $this->manager;
  }
}
