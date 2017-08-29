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
    $comments = $this->getDoctrine()->getRepository("Entity\Comment")->findAll();
    return $this->render("comment/display.html.twig", ["comments" => $comments]);
  }

  public function addAction(Request $request) {
    if($request->getMethod()=='POST') {
      $comment = new Comment();
      $comment->setName($request->request->get("name"));
      $this->getDoctrine()->persist($comment);
      $this->getDoctrine()->flush();
      header("location: http://blog-forteroche.dev/comment/display");
      die;
    }
    return $this->render("comment/add.html.twig");
  }

  public function updateAction(Requets $request, $id) {
    $comment = $this->getDoctrine->getRepository("Entity\Comment")->find($id);
    if($request->getMethod()=="POST") {
      $comment->setName($request->request->get("name"));
      $this->getDoctrine()->flush();
      header("location: http://blog-forteroche.dev/comment/display");
      die;
    }
    return $this->render("comment/update.html.twig", ["comment"=>$comment]);
  }

  public function deleteAction($id) {
    $comment = $this->getDoctrine()->getRepository("Entity\Comment")->find($id);
    $this->getDoctrine()->remove($comment);
    $this->getDoctrine()->flush();
    header("location: http://blog-forteroche.dev/comment/display");
    die;
  }
}
