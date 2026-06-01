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
                    ->required(),
                Select::make('jenis')
                    ->options(['masuk' => 'Masuk', 'keluar' => 'Keluar'])
                    ->required(),
                TextInput::make('nominal')
                    ->required()
                    ->numeric(),
                TextInput::make('kategori'),
            ]);
    }
}
