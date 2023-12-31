<?php

namespace Botble\Base\Traits\Forms;

use Botble\Base\Facades\MetaBox;
use Botble\Base\Models\BaseModel;
use Illuminate\Support\Arr;
use Kris\LaravelFormBuilder\Fields\FormField;

trait HasMetadata
{
    protected array $metadataFields;

    protected function isMetadataField(FormField $field): bool
    {
        $options = $field->getOptions();

        if (! $options) {
            return false;
        }

        return (bool) Arr::get($options, 'metadata', false);
    }

    protected function getMetadataFields(): array
    {
        return $this->metadataFields ??= collect($this->fields)
            ->filter(fn (FormField $field) => $this->isMetadataField($field))
            ->all();
    }

    protected function hasMetadataFields(): bool
    {
        return count($this->getMetadataFields()) > 0;
    }

    protected function setupMetadataFields(): void
    {
        $model = $this->model;

        if (! $model instanceof BaseModel || ! $model->exists) {
            return;
        }

        if (! $this->hasMetadataFields()) {
            return;
        }

        $model->loadMissing('metadata');

        foreach ($this->getMetadataFields() as $field) {
            $field->setValue(
                $model->getMetaData($field->getName(), true)
            );
        }
    }

    protected function saveMetadataFields(): void
    {
        if (! $this->model instanceof  BaseModel) {
            return;
        }

        if (! $this->hasMetadataFields()) {
            return;
        }

        foreach ($this->getMetadataFields() as $field) {
            MetaBox::saveMetaBoxData(
                $this->model,
                $field->getName(),
                $this->getRequest()->input($field->getName())
            );
        }
    }
}
