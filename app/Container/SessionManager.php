<?php

namespace Framework\Container;

use Doctrine\ORM\EntityManager;
use Framework\Container\Doctrine;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @var SessionInterface
 */
private $session;

/**
 * @var \Doctrine\ORM\EntityManager
 */
 private $entityManager;

 /**
  * @var Admin
  */
  private $admin = null;

 /**
  * @var SessionManager constructor.
  * @param RequestStack $requestStack
  * @param Doctrine $doctrine
  */
class SessionManager
{
  function __construct(RequestStack $requestStack, Doctrine $doctrine)
  {
    if($requestStack->getCurrentRequest()->getSession() === null)
    {
      $requestStack->getCurrentRequest()->setSession(new Session());
    }
    $this->session = $requestStack->getCurrentRequest()->getSession();
    $this->entityManager = $doctrine->getManager();
  }

  public function set($formData)
  {
    $admin = $this->entityManager->getRepository("Entity\Admin")->findOneByLogin($formData["login"]);
    if($admin === null)
    {
      throw new \Exception("Utilisateur inexistant");
    }
    if($admin->getPassword() != $formData["password"])
    {
      throw new \Exception("Mot de passe erroné !");
    }
    $this->session->set("AUTH",$admin->getId());
  }

  public function isAuthenticated()
  {
    return $this->session->has("AUTH");
  }

  /* Récupère l'utilisateur en question, sert à éviter d'avoir à faire appelle à la bdd à chaque fois que l'on fait un getAdmin.
  Permet d'aller le chercher dans la bdd seulement la première fois que l'on en a besoin. Vérifie d'abord si présent dans
  la propriété $admin, si c'est vide alors va le chercher dans la bdd.*/
  public function getAdmin()
  {
    if($this->isAuthenticated()) {
      if($this->admin === null) {
        $this->admin = $this->entityManager->getRepository("Entity\Admin")->find($this->session->get("AUTH"));
      }
      return $this->admin;
    } else {
      return null;
    }
  }
}
