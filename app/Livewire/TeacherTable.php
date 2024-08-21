<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Teacher;

class TeacherTable extends DataTableComponent
{
    protected $model = Teacher::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Subject", "subject")
                ->sortable()
                ->searchable(),
             Column::make("Join Date", "created_at")
                ->sortable()
                ->format(fn($value) => \Carbon\Carbon::parse($value)->format('Y/m/d')),
            // Column::make("Updated at", "updated_at")
            //     ->sortable()
            //     ->format(fn($value) => \Carbon\Carbon::parse($value)->format('Y/m/d')),
                Column::make('Actions')
                ->label(function (Teacher $model) {
                    return view('tables.teacher-table-actions', ['model' => $model]);
                }),
        ];
    }
}
