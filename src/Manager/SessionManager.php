<?php

namespace Manager;

use Framework\Container\Doctrine;
use Framework\Container\UserSession;
use Framework\Model\SessionInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 *
 */
class SessionManager extends UserSession implements SessionInterface
{
  /**
   * @var \Doctrine\ORM\EntityManager
   */
   private $entityManager;

  /**
   * SessionManager constructor.
   * @param RequestStack $requestStack
   * @param Doctrine $doctrine
   */
  public function __construct(RequestStack $requestStack, Doctrine $doctrine)
  {
    parent::__construct($requestStack);
    $this->entityManager = $doctrine->getManager();
  }

  public function check($login)
  {
    return $this->entityManager->getRepository("Entity\Admin")->findOneByLogin($login);
  }

  public function provider($id)
  {
    return $this->entityManager->getRepository("Entity\Admin")->find($id);
  }
}
