<?php

namespace App\Filament\Career\Resources\JobApplications\Pages;

use App\Filament\Career\Resources\JobApplications\JobApplicationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJobApplication extends CreateRecord
{
    protected static string $resource = JobApplicationResource::class;
}
