<?php

namespace App\Filament\Home\Resources\CategoryResource\Pages;

use App\Filament\Home\Resources\CategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;


//    protected function mutateFormDataBeforeCreate(array $data): array
//    {
//        return parent::mutateFormDataBeforeCreate($data); // TODO: Change the autogenerated stub
//    }
}
