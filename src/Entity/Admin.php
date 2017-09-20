<?php

namespace Entity;

/**
 * Class Admin
 * @package EntityManager
 *
 * @Entity
 * @Table(name="admin")
 */
class Admin
{
  /**
   * @var integer
   *
   * @Id
   * @GeneratedValue
   * @Column(name="id", type="integer")
   */
  private $id;

  /**
   * @var string
   *
   * @Column(name="login", type="string", length=255)
   */
  private $login;

  /**
   * @var string
   *
   * @Column(name="password", type="string", length=255)
   */
  private $password;


  /**
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId($id) {
    $this->id = $id;
  }
  
  /**
   * @return string
   */
  public function getLogin()
  {
    return $this->login;
  }

  /**
   * @param string $login
   */
  public function setLogin($login)
  {
    $this->login = $login;
  }

  /**
   * @return string
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * @param string $password
   */
  public function setPassword($password)
  {
    $this->password = $password;
  }
}
