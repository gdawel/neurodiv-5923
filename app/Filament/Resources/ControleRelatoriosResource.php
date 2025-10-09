<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ControleRelatoriosResource\Pages;
use App\Models\ControleRelatorios;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn; // Importante adicionar o BadgeColumn

class ControleRelatoriosResource extends Resource
{
    protected static ?string $model = ControleRelatorios::class;
    
    protected static ?string $navigationLabel = 'Controle de Relatórios'; 
    protected static ?string $modelLabel = 'Relatório';
    protected static ?string $pluralModelLabel = 'Relatórios';

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

    /**
     * 1. IMPEDIR ALTERAÇÃO:
     * O formulário agora está vazio, pois não queremos permitir edição.
     * A página de edição será desabilitada.
     */
    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // 3. CLASSIFICAÇÃO PADRÃO: Ordena pela data de criação, do mais novo para o mais antigo.
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('user.name')
                    ->label('Cliente')
                    ->searchable()
                    ->sortable(), // Permite classificar por esta coluna

                TextColumn::make('testes.nomeTeste')
                    ->label('Nome do Relatório')
                    ->searchable()
                    ->sortable(), // Permite classificar por esta coluna

                BadgeColumn::make('status')
                    ->searchable()
                    ->sortable() // Permite classificar por esta coluna
                    ->colors([
                        'primary' => 'gerando',
                        'warning' => 'pendente',
                        'success' => 'completo',
                        'danger' => 'falha',
                    ]),
                
                TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:i')
                    ->label('Data')
                    ->sortable(), // Permite classificar por esta coluna
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Action::make('download')
                        ->label('Baixar PDF')
                        ->icon('heroicon-o-document-arrow-down')
                        ->url(fn (ControleRelatorios $record): ?string => $record->file_path ? route('reports.download', $record) : null)
                        ->openUrlInNewTab()
                        ->visible(fn (ControleRelatorios $record): bool => $record->status === 'completo' && !empty($record->file_path)),

                    // 2. PERMITIR EXCLUSÃO COM CONFIRMAÇÃO:
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    // As funções abaixo continuam as mesmas
    public static function canCreate(): bool
    {
        return false;
    }

    // A função canDelete() foi removida para PERMITIR a exclusão através das Actions.
    // public static function canDelete(...): bool { return false; }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListControleRelatorios::route('/'),
            // As rotas de 'create' e 'edit' são removidas para impedir a criação/edição.
        ];
    }
}