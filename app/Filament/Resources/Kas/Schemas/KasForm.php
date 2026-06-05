<?php

namespace App\Filament\Resources\Kas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('tanggal')
                    ->required(),

                TextInput::make('keterangan')
                    ->required()
                    ->maxLength(255),

                Select::make('jenis')
                    ->options([
                        'masuk' => 'Kas Masuk',
                        'keluar' => 'Kas Keluar',
                    ])
                    ->required(),

                TextInput::make('nominal')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                Select::make('kategori')
                    ->options([
                        'operasional' => 'Operasional',
                        'pembangunan' => 'Pembangunan',
                        'sosial' => 'Sosial',
                    ])
                    ->required(),
            ]);
    }
}