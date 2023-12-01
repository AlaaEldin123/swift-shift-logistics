<?php

namespace Botble\Logistics\Tables;

use Botble\Logistics\Models\Service;
use Botble\Table\Abstracts\TableAbstract;
use Botble\Table\Actions\DeleteAction;
use Botble\Table\Actions\EditAction;
use Botble\Table\BulkActions\DeleteBulkAction;
use Botble\Table\Columns\Column;
use Botble\Table\Columns\CreatedAtColumn;
use Botble\Table\Columns\IdColumn;
use Botble\Table\Columns\ImageColumn;
use Botble\Table\Columns\NameColumn;
use Botble\Table\Columns\StatusColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;

class ServiceTable extends TableAbstract
{
    public function setup(): void
    {
        $this
            ->model(Service::class)
            ->addActions([
                EditAction::make()->route('logistics.services.edit'),
                DeleteAction::make()->route('logistics.services.destroy'),
            ]);
    }

    public function ajax(): JsonResponse
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('category_id', function (Service $service) {
                return $service->category?->name ?: '&mdash;';
            });

        return $this->toJson($data);
    }

    public function query(): Builder
    {
        $query = $this->getModel()
            ->query()
            ->select([
                'id',
                'thumbnail',
                'category_id',
                'title',
                'created_at',
                'status',
            ]);

        return $this->applyScopes($query);
    }

    public function columns(): array
    {
        return [
            IdColumn::make(),
            ImageColumn::make('thumbnail')
                ->title(trans('plugins/logistics::logistics.thumbnail')),
            NameColumn::make('title')
                ->route('logistics.services.edit'),
            Column::make('category_id')
                ->title(trans('plugins/logistics::logistics.category')),
            CreatedAtColumn::make(),
            StatusColumn::make(),
        ];
    }

    public function buttons(): array
    {
        return $this->addCreateButton(route('logistics.services.create'), 'logistics.services.create');
    }

    public function bulkActions(): array
    {
        return [
            DeleteBulkAction::make()->permission('logistics.services.destroy'),
        ];
    }

    public function getBulkChanges(): array
    {
        return [
            'title' => [
                'title' => trans('core/base::tables.title'),
                'type' => 'text',
                'validate' => 'required|max:120',
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type' => 'datePicker',
            ],
        ];
    }
}
