<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Hopital;

class HopitalTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('#', 'id')
                ->sortable()
                ->searchable(),
            Column::make('nom')
                ->sortable()
                ->searchable(),
            Column::make('addresse')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Hopital::query();
    }

    public function getTableRowUrl($row): string
    {
        return url('/hopitals/' . $row->id);
    }
}
