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
 class Framework extends HttpKernel
{
}
