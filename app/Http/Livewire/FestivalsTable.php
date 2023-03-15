<?php

namespace App\Http\Livewire;

use App\Models\Festival;
use Closure;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Livewire\Component;

class FestivalsTable extends Component implements HasTable
{
    use InteractsWithTable;

    public function getTableQuery()
    {
        return Festival::query()->orderBy('date');
    }

    protected function getTableRecordUrlUsing(): ?Closure
    {
        return fn (Festival $record): string => route('festival', ['festival' => $record]);
    }

    public function getTableColumns()
    {
        return [
            TextColumn::make('date')->date('F d'),
            TextColumn::make('name'),
            TextColumn::make('genre')->getStateUsing(fn($record) => ucfirst($record->genre)),
            TextColumn::make('acts'),
            TextColumn::make('available')->getStateUsing(fn($record) => $record->bands()->where('status', 'available')->count()),
            TextColumn::make('price'),
            TextColumn::make('capacity'),
        ];
    }

    public function isTablePaginationEnabled(): bool
    {
        return false;
    }

    public function render()
    {
        return view('livewire.festivals-table');
    }
}
