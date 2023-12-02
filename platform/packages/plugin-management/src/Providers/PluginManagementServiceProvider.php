<?php

namespace Botble\PluginManagement\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\PluginManagement\PluginManifest;
use Composer\Autoload\ClassLoader;

class PluginManagementServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this->setNamespace('packages/plugin-management')
            ->loadAndPublishConfigurations(['permissions', 'general'])
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->loadRoutes()
            ->loadHelpers()
            ->publishAssets();

        $manifest = (new PluginManifest())->getManifest();

        $loader = new ClassLoader();

        foreach ($manifest['namespaces'] as $key => $namespace) {
            $loader->setPsr4($namespace, plugin_path($key . '/src'));
        }

        $loader->register();

        foreach ($manifest['providers'] as $provider) {
            if (! class_exists($provider)) {
                continue;
            }

            $this->app->register($provider);
        }

        $this->app->register(CommandServiceProvider::class);

        DashboardMenu::default()->beforeRetrieving(function () {
            DashboardMenu::make()
                ->registerItem([
                    'id' => 'cms-core-plugins',
                    'priority' => 3000,
                    'name' => 'packages/plugin-management::plugin.plugins',
                    'icon' => 'ti ti-plug',
                    'permissions' => ['plugins.index'],
                ])
                ->registerItem([
                    'id' => 'cms-core-plugins-installed',
                    'priority' => 1,
                    'parent_id' => 'cms-core-plugins',
                    'name' => 'packages/plugin-management::plugin.installed_plugins',
                    'route' => 'plugins.index',
                ])
                ->registerItem([
                    'id' => 'cms-core-plugins-marketplace',
                    'priority' => 2,
                    'parent_id' => 'cms-core-plugins',
                    'name' => 'packages/plugin-management::plugin.add_new_plugin',
                    'route' => 'plugins.new',
                    'permissions' => ['plugins.marketplace'],
                ]);
        });

        $this->app->booted(function () {
            $this->app->register(HookServiceProvider::class);
        });

        $this->app->register(EventServiceProvider::class);
    }
}
