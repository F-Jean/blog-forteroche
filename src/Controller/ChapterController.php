<?php

namespace Controller;

use Framework\Controller;
use Entity\Chapter;
use Symfony\Component\HttpFoundation\Request;

/**
 *
 */
class ChapterController extends Controller {
  public function listAction(Request $request) {
    $chapters = $this->getDoctrine()->getRepository("Entity\Chapter")->findAll();
    return $this->render("chapter/display.html.twig", ["chapters" => $chapters]);
  }

  public function addAction(Request $request) {
    if($request->getMethod()=='POST') {
      $chapter = new Chapter();
      $chapter->setTitle($request->request->get("title"));
      $chapter->setContent($request->request->get("content"));
      $chapter->setAddAt(new \DateTime());
      $this->getDoctrine()->persist($chapter);
      $this->getDoctrine()->flush();
      header("location: http://blog-forteroche.dev/chapter/display");
      die;
    }
    return $this->render("chapter/add.html.twig");
  }

  public function updateAction(Request $request, $id) {
    $chapter = $this->getDoctrine()->getRepository("Entity\Chapter")->find($id);
    if($request->getMethod()=="POST") {
      $chapter->setTitle($request->request->get("title"));
      $chapter->setContent($request->request->get("content"));
      $this->getDoctrine()->flush();
      header("location: http://blog-forteroche.dev/chapter/display");
      die;
    }
    return $this->render("chapter/update.html.twig", ["chapter"=>$chapter]);
  }

  public function deleteAction($id) {
    $chapter = $this->getDoctrine()->getRepository("Entity\Chapter")->find($id);
    $this->getDoctrine()->remove($chapter);
    $this->getDoctrine()->flush();
    return $this->redirect("chapter/display");
  }
}
