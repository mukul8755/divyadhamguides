<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FestivalResource\Pages;
use App\Models\Festival;
use Filament\Forms\Form; // <-- IMPORTANT: Filament\Forms\Form (not Filament\Resources\Form)
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables\Table; // <-- IMPORTANT: Filament\Tables\Table
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Support\Str;

class FestivalResource extends Resource
{
    protected static ?string $model = Festival::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $navigationLabel = 'Festivals';

    // NOTE: signature uses Filament\Forms\Form
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state)))
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),

                DatePicker::make('date')->label('Festival Date'),

                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('festivals')
                    ->disk('public')
                    ->imagePreviewHeight('200'),

                RichEditor::make('description')->label('Description'),

                Toggle::make('is_active')->label('Active')->default(true),
            ]);
    }

    // NOTE: signature uses Filament\Tables\Table
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Image')->disk('public')->square(),
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('date')->date()->label('Date'),
                IconColumn::make('is_active')->boolean()->label('Active'),
            ])
            ->defaultSort('date', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListFestivals::route('/'),
            'create' => Pages\CreateFestival::route('/create'),
            'edit'   => Pages\EditFestival::route('/{record}/edit'),
        ];
    }
}
