<?php

namespace App\Filament\Admin\Resources\SettingResource\Pages;

use App\Filament\Admin\Resources\SettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditSetting extends EditRecord
{
    protected static string $resource = SettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\ViewAction::make(),
//            Actions\DeleteAction::make(),
        ];
    }

    public static function getRouteName(?string $panel = null): string
    {
        return parent::getRouteName($panel); // TODO: Change the autogenerated stub
    }

    public static function getUrl(array $parameters = [], bool $isAbsolute = true, ?string $panel = null, ?Model $tenant = null): string
    {
        return parent::getUrl($parameters, $isAbsolute, $panel, $tenant); // TODO: Change the autogenerated stub
    }

}
