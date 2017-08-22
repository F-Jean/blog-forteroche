<?php

 namespace Framework;

 use Symfony\Component\EventDispatcher\EventDispatcher;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\RequestStack;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
 use Symfony\Component\HttpKernel\Controller\ControllerResolver;
 use Symfony\Component\HttpKernel\EventListener\RouterListener;
 use Symfony\Component\HttpKernel\HttpKernel;
 use Symfony\Component\Routing\Exception\ResourceNotFoundException;
 use Symfony\Component\Routing\Matcher\UrlMatcher;
 use Symfony\Component\Routing\RequestContext;
 use Symfony\Component\Routing\Route;
 use Symfony\Component\Routing\RouteCollection;

 /**
  * Class Kernel
  * @package Framework
  */
 class Kernel {
   public static function run() {
     try {
       $request = Request::createFromGlobals();
       $requestStack = new RequestStack();
       $routes = new RouteCollection();
       /**
        * homepage route
        */
       $routes->add("homepage", new Route("/", [
         "_controller" => "Controller\DefaultController::indexAction"
       ]));

       /**
        * routes that handles ChapterController
        */
       $routes->add("chapter_display", new Route("/chapter/display", [
           "_controller" => "Controller\ChapterController::listAction"
       ]));
       $routes->add("chapter_add", new Route("/chapter/add", [
           "_controller" => "Controller\ChapterController::addAction"
       ]));
       $routes->add("chapter_update", new Route("/chapter/update/{id}", [
           "_controller" => "Controller\ChapterController::updateAction"
       ]));
       $routes->add("chapter_delete", new Route("/chapter/delete/{id}", [
           "_controller" => "Controller\ChapterController::deleteAction"
       ]));

       /**
        * routes that handles CommentController
        */
       $routes->add("comment_display", new Route("/comment/display", [
           "_controller" => "Controller\CommentController::listAction"
       ]));
       $routes->add("comment_add", new Route("/comment/add", [
           "_controller" => "Controller\CommentController::addAction"
       ]));
       $routes->add("comment_update", new Route("/comment/update/{id}", [
           "_controller" => "Controller\CommentController::updateAction"
       ]));
       $routes->add("comment_delete", new Route("/comment/delete/{id}", [
           "_controller" => "Controller\CommentController::deleteAction"
       ]));

       /**
        * routes that handles AdminController
        */
       $routes->add("user_register", new Route("/user/register", [
           "_controller" => "Controller\UserController::registerAction"
       ]));
       $routes->add("user_delete", new Route("/user/delete/{id}", [
           "_controller" => "Controller\UserController::deleteAction"
       ]));
       $context = new RequestContext();
       $matcher = new UrlMatcher($routes, $context);

       $controllerResolver = new ControllerResolver();
       $argumentResolver = new ArgumentResolver();

       $dispatcher = new EventDispatcher();
       $dispatcher->addSubscriber(new RouterListener($matcher, $requestStack));

       $kernel = new HttpKernel($dispatcher, $controllerResolver, $requestStack, $argumentResolver);
       $response = $kernel->handle($request);
     } catch (ResourceNotFoundException $e) {
         $response = new Response('Not Found', 404);
     } catch (\Exception $e) {
         $response = new Response('An error occurred : '.$e->getMessage(), 500);
     }
     $response->send();
 }
}
