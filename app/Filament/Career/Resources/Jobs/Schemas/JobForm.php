<?php

namespace App\Filament\Career\Resources\Jobs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class JobForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('location')
                    ->default(null),
                Select::make('type')
                    ->options([
            'full-time' => 'Full time',
            'part-time' => 'Part time',
            'contract' => 'Contract',
            'internship' => 'Internship',
        ])
                    ->default('full-time')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
