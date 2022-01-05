<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Dossier_medicale;

class PatientDossierMedicaleTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('#', 'id')
            ->sortable()
            ->searchable(),
        Column::make('N° registre national', 'numero_registre_national')
            ->sortable()
            ->searchable(),
        Column::make('Nom de maladie', 'maladies.nom')
            ->sortable()
            ->searchable(),
        Column::make('Status dossier médicale', 'dossier_medicale_statuses.status')
            ->sortable()
            ->searchable(),
        Column::make('Identifiant de consultation', 'consultation_id')
            ->sortable()
            ->searchable(),
        Column::make('Diagnostic', 'diagnostic')
            ->sortable()
            ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Dossier_medicale::query();
    }
}
