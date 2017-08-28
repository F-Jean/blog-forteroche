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
  private $addAt;

  /**
   * @var int
   *
   * @ManyToOne(targetEntity="Chapter")
   * @JoinColumn(name="chapter_id", referencedColumnName="id")
   */
  private $chapter;

  /**
   * @var int
   *
   * @ManyToOne(targetEntity="Comment")
   * @JoinColumn(name="parent_id", referencedColumnName="id")
   */
  private $parent;

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
  private $reportCom;

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
public function getAddAt() {
  return $this->addAt;
}

/**
 * @param date $add_At
 */
public function setAddAt($addAt) {
  $this->addAt = $addAt;

  /**
   * @return int
   */
  public function getChapter() {
    return $this->chapter;
  }

  /**
   * @param int $chapter_id
   */
  public function setChapter($chapter) {
    $this->chapter = $chapter;
  }

  /**
   * @return int
   */
  public function getParent() {
    return $this->parent;
  }

  /**
   * @param int $parent_id
   */
  public function setParent($parent) {
    $this->parent = $parent;
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
  public function getReportCom() {
    return $this->reportCom;
  }

  /**
   * @param int $report_com
   */
  public function setReportCom($reportCom) {
    $this->reportCom = $reportCom;
  }
}
