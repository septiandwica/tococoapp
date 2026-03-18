<?php

namespace App\Filament\Career\Resources\JobApplications\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class JobApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('job_id')
                    ->required()
                    ->numeric(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('resume_path')
                    ->default(null),
                Textarea::make('cover_letter')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('status')
                    ->options([
            'pending' => 'Pending',
            'reviewed' => 'Reviewed',
            'interview' => 'Interview',
            'rejected' => 'Rejected',
            'hired' => 'Hired',
        ])
                    ->default('pending')
                    ->required(),
            ]);
    }
}
