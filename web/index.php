<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__."/../vendor/autoload.php";
try
{
$locator = new \Symfony\Component\Config\FileLocator(array(__DIR__."/../src/Config"));
$loader = new \Symfony\Component\Routing\Loader\YamlFileLoader($locator);
$routes = $loader->load('routing.yml');

$container = new \Symfony\Component\DependencyInjection\ContainerBuilder();
$container->setParameter('routes', $routes);
$loader = new \Symfony\Component\DependencyInjection\Loader\YamlFileLoader($container, new \Symfony\Component\Config\FileLocator(__DIR__."/../app/config"));
$loader->load('services.yml');

$loader = new \Symfony\Component\DependencyInjection\Loader\YamlFileLoader($container, new \Symfony\Component\Config\FileLocator(__DIR__."/../src/Config"));
$loader->load('services.yml');

$response = $container->get("framework")->handle(\Symfony\Component\HttpFoundation\Request::createFromGlobals());
} catch (NotFoundHttpException $e) {
  $template = $container->get("templating")->getTwig()->load("default/error.html.twig");
  $response = new Response($template->render(["message" => "Cette route n'existe pas"]));
} catch (\Exception $e) {
            $template = $container->get("templating")->getTwig()->load("default/error.html.twig");
            $response = new Response($template->render(["message" => $e->getMessage()]));
          } $response->send();
