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
                    ->required(),

                Forms\Components\Textarea::make('deskripsi')
                    ->rows(4),

                Forms\Components\Select::make('kategori')
                    ->options([
                        'ibadah' => 'Ibadah',
                        'pendidikan' => 'Pendidikan',
                        'sosial' => 'Sosial',
                        'ramadan' => 'Ramadan',
                        'pemuda' => 'Pemuda',
                    ])
                    ->required(),

                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->directory('galeri')
                    ->required(),

            ]);
    }
}