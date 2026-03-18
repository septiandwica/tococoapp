<?php

namespace App\Filament\Community\Resources\Events\Pages;

use App\Filament\Community\Resources\Events\EventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;
}
