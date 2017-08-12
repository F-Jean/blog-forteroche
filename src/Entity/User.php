<?php

namespace Entity;

/**
 * Class User
 * @package Entity
 *
 * @Entity
 * @Table(name="user")
 */
class User {
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
   * @Column(name="pseudo", type="string", lenght="255")
   */
  private $pseudo;

  /**
   * @var string
   *
   * @Column(name="email", type="string", lenght="255")
   */
  private $email;

  /**
   * @var string
   *
   * @Column(name="password", type="string", lenght="255")
   */
  private $password;

  /**
   * @var string
   *
   * @Column(name="firstname", type="string", lenght="255")
   */
  private $firstname;

  /**
   * @var string
   *
   * @Column(name="lastname", type="string", lenght="255")
   */
  private $lastname;

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
  public function getPseudo() {
    return $this->pseudo;
  }

  /**
   * @param string $pseudo
   */
  public function setPseudo($pseudo) {
    $this->pseudo = $pseudo;
  }

  /**
   * @return string
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * @param string $email
   */
  public function setEmail($email) {
    $this->email = $email;
  }

  /**
   * @return string
   */
  public function getPassword() {
    return $this->password;
  }

  /**
   * @param string $password
   */
  public function setPassword($password) {
    $this->password = $password;
  }

  /**
   * @return string
   */
  public function getFirstname() {
    return $this->firstname;
  }

  /**
   * @param string $firstname
   */
  public function setFirstname($firstname) {
    $this->firstname = $firstname;
  }

  /**
   * @return string
   */
  public function getLastname() {
    return $this->lastname;
  }

  /**
   * @param string $lastname
   */
  public function setLastname($lastname) {
    $this->lastname = $lastname;
  }
}
