<?php

namespace Botble\Slug\Providers;

use Botble\Base\Contracts\BaseModel;
use Botble\Base\Forms\FormAbstract;
use Botble\Base\Supports\ServiceProvider;
use Botble\Slug\Facades\SlugHelper;
use Botble\Slug\Forms\Fields\PermalinkField;

class HookServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        FormAbstract::beforeRendering([$this, 'addSlugBox'], 17);

        add_filter('core_slug_language', [$this, 'setSlugLanguageForGenerator'], 17);
    }

    public function addSlugBox(FormAbstract $form): FormAbstract
    {
        $model = $form->getModel();

        if (! $model instanceof BaseModel || ! SlugHelper::isSupportedModel($model::class)) {
            return $form;
        }

        return $form
            ->addCustomField('permalink', PermalinkField::class)
            ->addAfter(SlugHelper::getColumnNameToGenerateSlug($model), 'slug', 'permalink', [
                'model' => $model,
                'colspan' => 'full',
            ]);
    }

    public function setSlugLanguageForGenerator(): bool|string
    {
        return SlugHelper::turnOffAutomaticUrlTranslationIntoLatin() ? false : 'en';
    }
}
