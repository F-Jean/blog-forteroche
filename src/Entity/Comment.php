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
   * @Column(name="comment_id", type="int")
   */
  private $comment_Id;

  /**
   * @var int
   *
   * @Column(name="parent_id_field", type="int")
   */
  private $parent_Id_Field;

  /**
   * @var int
   *
   * @Column(name="level_field", type="int")
   */
  private $level_Field;

  /**
   * @var int
   *
   * @Column(name="report_comment", type="int")
   */
  private $report_Comment;

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
  public function getComment_Id() {
    return $this->comment_Id;
  }

  /**
   * @param int $comment_id
   */
  public function setComment_Id($comment_Id) {
    $this->comment_Id = $comment_Id;
  }

  /**
   * @return int
   */
  public function getParent_Id_Field() {
    return $this->parent_Id_Field;
  }

  /**
   * @param int $parent_id_field
   */
  public function setParent_Id_Field($parent_Id_Field) {
    $this->parent_Id_Field = $parent_Id_Field;
  }

  /**
   * @return int
   */
  public function getLevel_Field() {
    return $this->level_Field;
  }

  /**
   * @param int $level_field
   */
  public function setLevel_Field($level_Field) {
    $this->level_Field = $level_Field;
  }

  /**
   * @return int
   */
  public function getReport_Comment() {
    return $this->report_Comment;
  }

  /**
   * @param int $report_comment
   */
  public function setReport_Comment($report_Comment) {
    $this->report_Comment = $report_Comment;
  }
}
