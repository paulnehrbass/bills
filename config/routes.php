<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {

    // Standard-Routenklasse
    $routes->setRouteClass(DashedRoute::class);

    // Hauptscope für die ganze App
    $routes->scope('/', function (RouteBuilder $builder) {

        // Home-Seite
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        // Login / Logout
        $builder->connect('/login', ['controller' => 'Users', 'action' => 'login']);
        $builder->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);

        // BillsStatesController explizit
        $builder->connect('/BillsStates', ['controller' => 'BillsStates', 'action' => 'index']);
        $builder->connect('/BillsStates/:action/*', ['controller' => 'BillsStates']);

        // Pages-Controller catch-all
        $builder->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

        // Fallbacks für alle anderen Controller
        $builder->fallbacks(DashedRoute::class);
    });

};
