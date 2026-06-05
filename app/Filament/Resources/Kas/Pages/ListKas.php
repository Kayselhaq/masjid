<?php

namespace App\Filament\Resources\Kas\Pages;

use App\Filament\Resources\Kas\KasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKas extends ListRecords
{
    protected static string $resource = KasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('export')
                ->label('Export CSV')
                ->icon('heroicon-o-arrow-down-tray')
                ->url(url('/export-keuangan'))
                ->openUrlInNewTab(),

            Actions\CreateAction::make(),
        ];
    }
}