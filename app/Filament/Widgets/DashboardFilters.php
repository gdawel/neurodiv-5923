<?php

namespace App\Filament\Widgets;

use Filament\Forms\Components\Actions; // <-- Importante: mudamos a importação
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Widgets\Widget;

class DashboardFilters extends Widget implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.widgets.dashboard-filters';
    protected static bool $isLazy = false;
    protected int | string | array $columnSpan = 2;
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        DatePicker::make('start')
                            ->label('Data de Início')
                            ->live(),

                        DatePicker::make('end')
                            ->label('Data de Fim')
                            ->live(),

                        // MUDANÇA AQUI: Envolvemos o Action dentro de um Actions
                        Actions::make([
                            Action::make('limparFiltro')
                                ->label('Limpar filtro')
                                ->color('danger')
                                ->action(function () {
                                    $this->form->fill();
                                    $this->dispatch('filtersUpdated', filters: $this->form->getState());
                                }),
                        ])->fullWidth(), // E aplicamos o ->fullWidth() ao grupo de ações
                    ])
                    ->columns(2)
            ])
            ->statePath('data');
    }

    public function updated(string $name, $value): void
    {
        $this->dispatch('filtersUpdated', filters: $this->form->getState());
    }
}