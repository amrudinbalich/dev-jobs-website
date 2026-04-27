<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->unique()
                    ->placeholder('Company Name'),

                Select::make('size')
                    ->required()
                    ->default('1-10')
                    ->options([
                        '1-10'       => '1-10',
                        '11-50'      => '11-50',
                        '51-200'     => '51-200',
                        '201-500'    => '201-500',
                        '501-1000'   => '501-1000',
                        '1001-5000'  => '1001-5000',
                    ]),
                    
                TextInput::make('website_url')
                    ->url()
                    ->nullable()
                    ->placeholder('https://your-company.com'),

                Textarea::make('description')
                    ->nullable()
                    ->columnSpanFull()
                    ->placeholder('About (optional)'),
            ]);
    }
}
