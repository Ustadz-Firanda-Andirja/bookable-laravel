<?php

namespace App\Filament\Resources\BookResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class TableOfContentsRelationManager extends RelationManager
{
    protected static string $relationship = 'table_of_contents';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('table_of_content_id')
                    ->relationship('table_of_content', 'label', function (Builder $query,) {
                        return $query->where('book_id', parent::getOwnerRecord()->id);
                    })
                    ->label('Induk')
                    ->searchable()
                    ->preload()
                    ->columnSpan(2),

                Forms\Components\TextInput::make('label')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(2),

                Forms\Components\RichEditor::make('content')
                    ->label('Konten (kosongkan jika daftar isi memiliki sub)')
                    ->columnSpan(2),
                Forms\Components\KeyValue::make('footnotes')
                    ->columnSpan(2)

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('table_of_content.label')->label('Induk'),
                Tables\Columns\TextColumn::make('label'),
                Tables\Columns\TextInputColumn::make('sequence'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
