<?php

namespace App\Filament\News\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('category_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('author_id')
                    ->numeric()
                    ->default(null),
                FileUpload::make('image')
                    ->image(),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'review' => 'Review', 'published' => 'Published'])
                    ->default('draft')
                    ->required(),
            ]);
    }
}
