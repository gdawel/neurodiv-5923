<?php

namespace App\Filament\Widgets;

use App\Models\Orders; // Corrigido para "Order" no singular
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class MainStatsOverview extends BaseWidget
{
    public ?array $dashboardFilters = [];
    protected int | string | array $columnSpan = 'full';

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

    protected function getStats(): array
    {
        $startDate = $this->dashboardFilters['start'] ?? null;
        $endDate = $this->dashboardFilters['end'] ?? null;

        $userQuery = User::query()
            ->where('usertype', 'Cliente')
            ->when($startDate, fn ($query) => $query->whereDate('created_at', '>=', $startDate))
            ->when($endDate, fn ($query) => $query->whereDate('created_at', '<=', $endDate));

        $orderQuery = Orders::query()
            ->when($startDate, fn ($query) => $query->whereDate('created_at', '>=', $startDate))
            ->when($endDate, fn ($query) => $query->whereDate('created_at', '<=', $endDate));
        
        $totalClientes = $userQuery->clone()->count();
        $totalHomens = $userQuery->clone()->where('sexo_biologico', 'M')->count();
        $totalMulheres = $userQuery->clone()->where('sexo_biologico', 'F')->count();

        $percentualHomens = ($totalClientes > 0) ? round(($totalHomens / $totalClientes) * 100, 1) : 0;
        $percentualMulheres = ($totalClientes > 0) ? round(($totalMulheres / $totalClientes) * 100, 1) : 0;

        return [
            Stat::make('Total de Clientes', $totalClientes)
                ->description('Novos clientes no período')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
            Stat::make('Homens', $totalHomens)
                ->description("$percentualHomens% do total de clientes"),
            Stat::make('Mulheres', $totalMulheres)
                ->description("$percentualMulheres% do total de clientes"),
            Stat::make('Total de Pedidos', $orderQuery->clone()->count())
                ->description('Pedidos realizados no período')
                ->descriptionIcon('heroicon-m-shopping-cart'),
            Stat::make('Receita Total', Number::currency($orderQuery->clone()->sum('grand_total'), 'BRL'))
                ->description('Soma dos valores dos pedidos')
                ->descriptionIcon('heroicon-m-banknotes'),
        ];
    }
}