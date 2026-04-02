<?php

namespace App\Filament\Pages;

use Filament\Schemas\Components;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\HtmlString;
use Inerba\DbConfig\AbstractPageSettings;

class GeneralSettings extends AbstractPageSettings
{
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected static ?string $title = 'Settings';

    protected function settingName(): string
    {
        return 'general';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Administration';
    }

    /**
     * Provide default values.
     *
     * @return array<string, mixed>
     */
    public function getDefaultData(): array
    {
        return [];
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                // You can delete these statements!
                Components\Text::make(new HtmlString(
                    View::make('db-config::filament.pages.settings-help', [
                        'group' => $this->settingName(),
                        'pageClass' => class_basename(self::class),
                    ])->render()
                )),
            ])
            ->statePath('data');
    }
}
