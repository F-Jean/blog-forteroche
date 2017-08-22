<?php

namespace Entity;

/**
 * Class Chapter
 * @package Entity
 *
 * @Entity
 * @Table(name="chapter")
 */
class Chapter {
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
   * @Column(name="title", type="string")
   */
  private $title;

  /**
   * @var string
   *
   * @Column(name="content", type="string")
   */
  private $content;

  /**
   * @var date
   *
   * @Column(name="add_at", type="date")
   */
  private $add_At;

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
  public function getTitle() {
    return $this->title;
  }

  /**
   * @param string $title
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * @return string
   */
  public function getContent() {
    return $this->content;
  }

  /**
   * @param string $content
   */
  public function setContent($content) {
    $this->content = $content;
  }

  /**
   * @return date
   */
  public function getAdd_At() {
    return $this->add_At;
  }

  /**
   * @param date $add_At
   */
  public function setAdd_At($add_At) {
    $this->add_At = $add_At;
  }
}
