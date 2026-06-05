<?php

namespace App\Filament\Resources\Kegiatans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KegiatanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255),

                Textarea::make('deskripsi')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                DatePicker::make('tanggal')
                    ->required(),

                TextInput::make('lokasi')
                    ->required(),

                Select::make('kategori')
                    ->options([
                        'kajian' => 'Kajian',
                        'sosial' => 'Sosial',
                        'pendidikan' => 'Pendidikan',
                        'remaja' => 'Remaja Masjid',
                        'ramadan' => 'Ramadan',
                    ])
                    ->required(),

                FileUpload::make('gambar')
                    ->image()
                    ->directory('kegiatan')
                    ->disk('public'),

                TextInput::make('link_daftar')
                    ->label('Link Pendaftaran')
                    ->url()
                    ->placeholder('https://forms.gle/...'),
            ]);
    }
}