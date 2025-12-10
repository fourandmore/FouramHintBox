<?php

namespace FouramHintBox\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\ShopBuilder\Contracts\ContentWidgetRepositoryContract;
use FouramHintBox\Widgets\FouramHintBoxWidget;

class FouramHintBoxServiceProvider extends ServiceProvider
{
    public function register()
    {
        // nichts nötig
    }

    public function boot(ContentWidgetRepositoryContract $widgetRepository)
    {
        // Widget beim ShopBuilder registrieren
        $widgetRepository->registerWidget(FouramHintBoxWidget::class);
    }
}
