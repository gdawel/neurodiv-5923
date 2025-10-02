<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStatsOverview extends BaseWidget
{
    protected int | string | array $columnSpan = 1;
    protected static ?int $sort = -3;

    protected function getStats(): array
    {
        return [
            Stat::make('Total de Admins', User::where('usertype', 'Admin')->count())
                ->description('Administradores do sistema')
                ->descriptionIcon('heroicon-m-shield-check')
                ->color('danger'),
        ];
    }
}