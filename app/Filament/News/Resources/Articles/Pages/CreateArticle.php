<?php

namespace App\Filament\News\Resources\Articles\Pages;

use App\Filament\News\Resources\Articles\ArticleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
}
