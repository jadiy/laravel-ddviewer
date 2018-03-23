<?php
namespace Kilimall\Viewer;

use Illuminate\Support\ServiceProvider;

class ViewerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'viewer');
        Viewer::boot();
    }
}
