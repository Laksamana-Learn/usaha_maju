<?php

namespace App\Filament\Pages;

use App\Filament\Widgets;
use Filament\Facades\Filament;
use Filament\Pages\Dashboard as BasePage;

class Dashboard extends BasePage
{
    public function getWidgets(): array
    {
        // return default widgets
        return Filament::getWidgets();
    }
}