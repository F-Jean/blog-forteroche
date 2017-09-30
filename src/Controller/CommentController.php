<?php

namespace Controller;

use Framework\Controller;
use Entity\Comment;
use Symfony\Component\HttpFoundation\Request;

/**
 *
 */
class CommentController extends Controller {
  public function listAction() {
    $comments = $this->getDoctrine()->getRepository("Entity\Comment")->findByReportCom(true);
    return $this->render("comment/moderate.html.twig", ["comments" => $comments]);
  }

  public function addAction(Request $request, $chapter, $parent = null) {
    $chapter=$this->getDoctrine()->getRepository("Entity\Chapter")->find($chapter);
    $lvl=0;
    if ($parent != null) {
      $parent=$this->getDoctrine()->getRepository("Entity\Comment")->find($parent);
      $lvl=$parent->getLvl()+1;
    }
    if($request->getMethod()=='POST') {
      $comment = new Comment();
      $comment->setChapter($chapter);
      $comment->setParent($parent);
      $comment->setPseudo($request->request->get("pseudo"));
      $comment->setContent($request->request->get("content"));
      $comment->setReportCom(false);
      $comment->setLvl($lvl);
      $comment->setAddAt(new \DateTime());
      $this->getDoctrine()->persist($comment);
      $this->getDoctrine()->flush();
      return $this->redirect("homepage");
    }
    return $this->render("comment/add.html.twig");
  }

  public function updateAction(Request $request, $id) {
    $comment = $this->getDoctrine()->getRepository("Entity\Comment")->find($id);
    if($request->getMethod()=="POST") {
      $comment->setPseudo($request->request->get("pseudo"));
      $comment->setContent($request->request->get("content"));
      $this->getDoctrine()->flush();
      return $this->redirect("comment_moderate");
    }
    return $this->render("comment/update.html.twig", ["comment"=>$comment]);
  }

  public function deleteAction($id) {
    $comment = $this->getDoctrine()->getRepository("Entity\Comment")->find($id);
    $this->getDoctrine()->remove($comment);
    $this->getDoctrine()->flush();
    return $this->redirect("comment_moderate");
  }

  public function reportAction($id) {
    $comment = $this->getDoctrine()->getRepository("Entity\Comment")->find($id);
      $comment->setReportCom(true);
      $this->getDoctrine()->flush();
  }
}
