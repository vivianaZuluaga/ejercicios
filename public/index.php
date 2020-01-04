<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_error', 1);
    error_reporting(E_ALL);

    require_once('../vendor/autoload.php');
    use Illuminate\Database\Capsule\Manager as Capsule;
    use Aura\Router\RouterContainer;

    $capsule = new Capsule;
    $capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'lrvmovil_copservir',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    $request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER,
        $_GET,
        $_POST,
        $_COOKIE,
        $_FILES
    );

    $routerContainer = new RouterContainer();
    $map = $routerContainer->getMap();
    $map->get('index', '/ejercicios_php/', '../listaMedicos.php');
    $map->get('addMedico', '/ejercicios_php/medicos/add', '../addMedicos.php');
    $matcher = $routerContainer->getMatcher();
    $route = $matcher->match($request);

    if(!$route){
        echo "Not found";
    }else{
        require $route->handler;
    }
?>
