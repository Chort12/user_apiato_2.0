<?php

namespace App\Filament\Resources;

use App\Containers\AppSection\User\Models\User;
use App\Filament\Resources\UsersResource\Pages;
use App\Filament\Resources\UsersResource\RelationManagers;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('f_name')
                    ->string()
                    ->required()
                    ->minValue(2)
                    ->maxValue(50)
                    ->label('Имя'),

                TextInput::make('l_name')
                    ->string()
                    ->required()
                    ->minValue(2)
                    ->maxValue(50)
                    ->label('Фамилия'),

                TextInput::make('m_name')
                    ->string()
                    ->nullable()
                    ->minValue(2)
                    ->maxValue(50)
                    ->label('Отчество'),

                TextInput::make('password')
                    ->required()
                    ->password()
                    ->string()
                    ->minValue(4)
                    ->dehydrateStateUsing(fn($state) => Hash::make($state))
                    ->label('Пароль'),


                TextInput::make('email')
                    ->required()
                    ->email()
                    ->label('Email'),

                DatePicker::make('birthday')
                    ->required()
                    ->date()
                    ->before(today())
                    ->label('Дата рождения'),

                SpatieMediaLibraryFileUpload::make('image')
                    ->customHeaders(['CacheControl' => 'max-age=86400'])
                    ->label('Изображение'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('f_name')->label('Имя'),
                Tables\Columns\TextColumn::make('l_name')->label('Фамилия'),
                Tables\Columns\TextColumn::make('m_name')->label("Отчество"),
                Tables\Columns\TextColumn::make('birthday')->label('Дата рождения'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\ImageColumn::make('media')
                    ->label('Изображение')
                    ->getStateUsing(fn($record) => $record->getFirstMediaUrl())
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
