<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\AdminStatsOverview;
use App\Filament\Widgets\DashboardFilters;
use App\Filament\Widgets\MainStatsOverview;
use App\Filament\Widgets\OrderItemsMatrix;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public function getHeaderWidgets(): array
    {
        return [
            DashboardFilters::class,
            //AdminStatsOverview::class,
        ];
    }
    
    public function getHeaderWidgetsColumns(): int | array
    {
        return 2;
    }

    public function getWidgets(): array
    {
        return [
            MainStatsOverview::class,
            //OrderItemsMatrix::class,
        ];
    }
}