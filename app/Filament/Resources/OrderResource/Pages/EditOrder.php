<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // protected function mutateFormDataBeforeFill(array $data): array
    // {
    //     $data['total_price'] = $this->getRecord()->getTotalPrice();
    //     return $data;
    // }

    // protected function mutateFormDataBeforeSave(array $data): array
    // {
    //     $data['total_price'] = $this->getRecord()->getTotalPrice();
    //     dd($this->getRecord());

    //     return $data;
    // }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update($data);
        $total = $record->getTotalPrice();
        $this->data['total_price'] = $total;
        return $record;
    }
}
