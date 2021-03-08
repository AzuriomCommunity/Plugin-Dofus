<?php

namespace Azuriom\Plugin\Dofus\Providers;

use Azuriom\Extensions\Plugin\BaseRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * @var string
     */
    protected $namespace = 'Azuriom\Plugin\Dofus\Controllers';

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function loadRoutes()
    {
        $this->mapPluginsRoutes();

        $this->mapAdminRoutes();

        $this->mapApiRoutes();

        //
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api/'.$this->plugin->id)
            ->middleware('api')
            ->namespace($this->namespace.'\Api')
            ->name($this->plugin->id.'.')
            ->group(plugin_path($this->plugin->id.'/routes/api.php'));
    }
    
    protected function mapPluginsRoutes()
    {
        Route::prefix($this->pluginName)
            ->middleware('web')
            ->namespace($this->namespace)
            ->name("{$this->pluginName}.")
            ->group(plugin_path($this->pluginName.'/routes/web.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::prefix('admin/'.$this->pluginName)
            ->middleware('admin-access')
            ->namespace($this->namespace.'\Admin')
            ->name($this->pluginName.'.admin.')
            ->group(plugin_path($this->pluginName.'/routes/admin.php'));
    }
}
