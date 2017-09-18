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
   * @var datetime
   *
   * @Column(name="add_at", type="datetime")
   */
  private $addAt;

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
   * @return datetime
   */
  public function getAddAt() {
    return $this->addAt;
  }

  /**
   * @param datetime
   */
  public function setAddAt($addAt) {
    $this->addAt = $addAt;
  }
}
