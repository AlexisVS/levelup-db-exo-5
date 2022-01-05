<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Consultation;
use Illuminate\Support\Facades\Request;

class ConsultationTable extends DataTableComponent
{
    public bool $showSearch = false;
    public function columns(): array
    {
        return [
            Column::make('#', 'id'),
            Column::make('Docteur', 'docteurs.nom'),
            Column::make('Patient N°', 'numero_registre_national'),
            Column::make('Status consultation', 'consultation_statuses.status'),
            Column::make('Nom du locale', 'locals.nom'),
            Column::make('Date de consultation', 'consultation_date'),
            Column::make(' ?? Pass consultation ??', 'pass_consultation'),
        ];
    }

    public function query(): Builder
    {
        return Consultation::query()->join('locals', function ($join) {
            $join->on('local_id', '=', 'locals.id');
        })
            ->where('locals.hopital_id', '=', Request::route('hopital'));
    }
}
