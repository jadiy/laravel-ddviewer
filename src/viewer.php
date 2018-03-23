<?php
namespace Kilimall\Viewer;

use Illuminate\Support\Facades\Route;
 
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
        Route::get('ddviewer', 'Kilimall\Viewer\Controllers\ViewerController@index');
    }
}
