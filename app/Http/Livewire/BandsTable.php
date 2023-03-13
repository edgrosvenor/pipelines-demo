<?php

namespace App\Http\Livewire;

use App\Models\Band;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Livewire\Component;

class BandsTable extends Component implements HasTable
{
    use InteractsWithTable;

    public function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return Band::query();
    }

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('name'),
            TextColumn::make('genre'),
            TextColumn::make('fee'),
            TextColumn::make('draw')->label('Average Draw')
        ];
    }

    public function render()
    {
        return view('livewire.bands-table');
    }
}
