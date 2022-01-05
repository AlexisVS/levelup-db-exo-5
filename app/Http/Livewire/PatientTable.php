<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Patient;
use Illuminate\Support\Facades\Request;

class PatientTable extends DataTableComponent
{
    public string $primaryKey = 'numero_registre_national';
    public function columns(): array
    {
        return [
            Column::make('#', 'numero_registre_national')
                ->sortable()
                ->searchable(),
                
            Column::make('Nom', 'nom')
                ->sortable()
                ->searchable(),
            Column::make('Prénom', 'prenom')
                ->sortable()
                ->searchable(),
            Column::make('Date d\'anniversaire', 'date_anniversaire')
                ->sortable()
                ->searchable(),
            Column::make('Genre', 'genre')
                ->sortable()
                ->searchable(),
            Column::make('Pays', 'pays')
                ->sortable()
                ->searchable(),
            Column::make('Ville', 'ville')
                ->sortable()
                ->searchable(),
            Column::make('Addresse', 'addresse')
                ->sortable()
                ->searchable(),
            Column::make('Code postale', 'code_postale')
                ->sortable()
                ->searchable(),
            Column::make('N° Tel', 'numero_telephone')
                ->sortable()
                ->searchable(),
            Column::make('Nom de contact', 'nom_contact')
                ->sortable()
                ->searchable(),
            Column::make('N° Tel contact', 'numero_contact')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }

    public function getTableRowUrl($row): string
    {
        return url('/patients/dossier-medicale/' . $row->numero_registre_national);
    }
}
