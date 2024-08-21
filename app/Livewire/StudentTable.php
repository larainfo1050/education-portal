<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Student;
use Carbon\Carbon;

class StudentTable extends DataTableComponent
{
    protected $model = Student::class;

    public function query()
    {
        return Student::with('teacher');
    }

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
            Column::make("Student Name", "student_name")
                ->sortable()
                ->searchable(),
            Column::make("Class Teacher", "teacher.name")
                ->sortable()
                ->searchable(),
            Column::make("Class", "class")
                ->sortable()
                ->searchable(),
            Column::make("Admission Date", "admission_date")
                ->sortable()
                ->searchable()
                ->format(fn($value) => Carbon::parse($value)->format('Y/m/d')),
            Column::make("Yearly Fees", "yearly_fees")
                ->sortable()
                ->searchable(),
            Column::make("Gender", "gender")
                ->sortable()
                ->searchable()
                ->format(function ($value) {
                    return ucfirst($value);
                }),
            Column::make('Actions')
                ->label(function (Student $model) {
                    return view('tables.student-table-actions', ['model' => $model]);
                }),
        ];
    }
}
