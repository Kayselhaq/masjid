<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('deskripsi')
                    ->rows(4)
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('kategori')
                     ->required(),

                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->directory('galeri')
                    ->disk('public')
                    ->imageEditor()
                    ->required(),

            ]);
    }
}