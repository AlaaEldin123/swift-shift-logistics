<?php

namespace Botble\Logistics\Tables;

use Botble\Logistics\Models\Quote;
use Botble\Table\Abstracts\TableAbstract;
use Botble\Table\Actions\DeleteAction;
use Botble\Table\Actions\EditAction;
use Botble\Table\BulkActions\DeleteBulkAction;
use Botble\Table\Columns\CreatedAtColumn;
use Botble\Table\Columns\EmailColumn;
use Botble\Table\Columns\IdColumn;
use Botble\Table\Columns\LinkableColumn;
use Botble\Table\Columns\NameColumn;
use Botble\Table\Columns\StatusColumn;
use Illuminate\Database\Eloquent\Builder;

class QuoteTable extends TableAbstract
{
    public function setup(): void
    {
        $this
            ->model(Quote::class)
            ->addActions([
                EditAction::make()->route('logistics.quotation-requests.edit'),
                DeleteAction::make()->route('logistics.quotation-requests.destroy'),
            ]);
    }

    public function query(): Builder
    {
        return $this->applyScopes(
            $this->getModel()
                ->query()
                ->select([
                    'id',
                    'name',
                    'email',
                    'message',
                    'created_at',
                    'status',
                ])
        );
    }

    public function columns(): array
    {
        return [
            IdColumn::make(),
            NameColumn::make()->route('logistics.quotation-requests.edit'),
            EmailColumn::make(),
            LinkableColumn::make('message')
                ->route('logistics.quotation-requests.edit')
                ->title(trans('plugins/logistics::logistics.message'))
                ->limit(70)
                ->alignLeft(),
            CreatedAtColumn::make(),
            StatusColumn::make(),
        ];
    }

    public function bulkActions(): array
    {
        return [
            DeleteBulkAction::make()->permission('logistics.quotation-requests.destroy'),
        ];
    }

    public function getBulkChanges(): array
    {
        return [
            'name' => [
                'title' => trans('core/base::tables.name'),
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
