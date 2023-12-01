<?php

namespace Botble\Logistics;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Illuminate\Support\Facades\Schema;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        Schema::dropIfExists('lg_custom_field_options');
        Schema::dropIfExists('lg_custom_fields');
        Schema::dropIfExists('lg_services');
        Schema::dropIfExists('lg_service_categories');
        Schema::dropIfExists('lg_packages');
        Schema::dropIfExists('lg_quotes');

        Schema::dropIfExists('lg_service_categories_translations');
        Schema::dropIfExists('lg_services_translations');
        Schema::dropIfExists('lg_packages_translations');
    }
}
