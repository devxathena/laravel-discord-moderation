<?php

namespace App\Filament\Admin\Resources\SettingResource\Pages;

use App\Filament\Admin\Resources\SettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Database\Eloquent\Model;

class ViewSetting extends ViewRecord
{
    protected static string $resource = SettingResource::class;

    public function getModel(): string
    {
        return parent::getModel(); // TODO: Change the autogenerated stub
    }


    protected function getHeaderActions(): array
    {
        return [
//            Actions\EditAction::make(),
        ];
    }
}
