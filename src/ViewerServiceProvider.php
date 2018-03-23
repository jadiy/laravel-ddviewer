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
        Viewer::boot();
    }
}
