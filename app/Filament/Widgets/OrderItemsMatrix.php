<?php

namespace App\Filament\Widgets;

use App\Models\Orderitems;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class OrderItemsMatrix extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';
    protected ?array $dashboardFilters = [];
    
    protected function getListeners(): array
    {
        return [
            'filtersUpdated' => 'onFiltersUpdated',
        ];
    }
    
    public function onFiltersUpdated(array $filters): void
    {
        $this->dashboardFilters = $filters;
    }

    public function getTableHeading(): string
    {
        return 'Status dos Testes';
    }
    
    public function getTableRecordKey($record): string
    {
        return $record->codTeste;
    }

    protected function getTableQuery(): Builder
    {
        $startDate = $this->dashboardFilters['start'] ?? null;
        $endDate = $this->dashboardFilters['end'] ?? null;
        
        return Orderitems::query()
            ->whereNotNull('codTeste')
            ->select([
                'codTeste',
                DB::raw("COUNT(CASE WHEN testeStatus = 'novo' THEN 1 END) as novo_count"),
                DB::raw("COUNT(CASE WHEN testeStatus = 'iniciado' THEN 1 END) as iniciado_count"),
                DB::raw("COUNT(CASE WHEN testeStatus = 'concluido' THEN 1 END) as concluido_count"),
                DB::raw("COUNT(*) as total_row")
            ])
            ->when($startDate, fn ($query) => $query->whereDate('created_at', '>=', $startDate))
            ->when($endDate, fn ($query) => $query->whereDate('created_at', '<=', $endDate))
            ->groupBy('codTeste')
            ->orderBy('codTeste');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('codTeste')->label('Código do Teste')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('novo_count')->label('Novo')->sortable(),
            Tables\Columns\TextColumn::make('iniciado_count')->label('Iniciado')->sortable(),
            Tables\Columns\TextColumn::make('concluido_count')->label('Concluído')->sortable(),
            Tables\Columns\TextColumn::make('total_row')->label('Total')->weight('bold')->sortable(),
        ];
    }
}