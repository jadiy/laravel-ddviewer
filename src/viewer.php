<?php
namespace Kilimall\Viewer;
 
class Viewer
{
    public static function boot()
    {
        static::registerRoutes();
    }

    /**
     * Register routes for laravel-admin.
     *
     * @return void
     */
    public static function registerRoutes()
    {
        parent::routes(function ($router) {
            $router->get('ddviewer', 'Kilimall\Viewer\Controllers\ViewerController@index');
        });
    }
}
