<?php

namespace App\Filament\Community\Resources\Posts\Pages;

use App\Filament\Community\Resources\Posts\PostResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
