<?php

namespace Entity;

/**
 * Class Comment
 * @package Entity
 *
 * @Entity
 * @Table(name="comment")
 */
class Comment {
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
   * @var int
   *
   * @Column(name="chapter_id", type="integer")
   */
  private $chapter_Id;

  /**
   * @var int
   *
   * @Column(name="parent_id", type="integer")
   */
  private $parent_Id;

  /**
   * @var int
   *
   * @Column(name="lvl", type="integer")
   */
  private $lvl;

  /**
   * @var int
   *
   * @Column(name="report_com", type="integer")
   */
  private $report_Com;

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
  public function getContent() {
    return $this->content;
  }

  /**
   * @param string $content
   */
  public function setContent($content) {
    $this->content = $content;
  }
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

  /**
   * @return int
   */
  public function getChapter_Id() {
    return $this->chapter_Id;
  }

  /**
   * @param int $chapter_id
   */
  public function setChapter_Id($chapter_Id) {
    $this->chapter_Id = $chapter_Id;
  }

  /**
   * @return int
   */
  public function getParent_Id() {
    return $this->parent_Id;
  }

  /**
   * @param int $parent_id
   */
  public function setParent_Id($parent_Id) {
    $this->parent_Id = $parent_Id;
  }

  /**
   * @return int
   */
  public function getLvl() {
    return $this->lvl;
  }

  /**
   * @param int $lvl
   */
  public function setLvl($lvl) {
    $this->lvl = $lvl;
  }

  /**
   * @return int
   */
  public function getReport_Com() {
    return $this->report_Com;
  }

  /**
   * @param int $report_com
   */
  public function setReport_Com($report_Com) {
    $this->report_Com = $report_Com;
  }
}
