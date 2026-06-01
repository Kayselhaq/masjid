<?php

namespace App\Filament\Resources\Pengumumen\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PengumumanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                TextInput::make('gambar'),
                Textarea::make('isi')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('tanggal')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('aktif'),
            ]);
    }
}
