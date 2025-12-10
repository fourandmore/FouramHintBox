<?php

namespace FouramHintBox\Widgets;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetTypes;

class FouramHintBoxWidget extends BaseWidget
{
    protected $template = "FouramHintBox::Widgets.FouramHintBoxWidget";

    public function getData(): array
    {
        return WidgetDataFactory::make("FouramHintBox::HintBox")
            ->withLabel("Widget.fouramHintBoxLabel")
            ->withPreviewImageUrl("/images/hintbox-widget.svg")
            ->withType(WidgetTypes::STATIC)
            ->withCategories(["text"])
            ->withPosition(2100)
            ->toArray();
    }

    public function getSettings(): array
    {
        /** @var WidgetSettingsFactory $settings */
        $settings = pluginApp(WidgetSettingsFactory::class);

        // nur Standardgruppen + 2 einfache Felder
        $settings->createCustomClass();
        $settings->createAppearance();
        $settings->createSpacing();

        $settings->createText("headline", [
            "name"    => "Widget.fouramHintBoxHeadlineLabel",
            "tooltip" => "Widget.fouramHintBoxHeadlineTooltip"
        ]);

        $settings->createNoteEditor("text", [
            "name"    => "Widget.fouramHintBoxTextLabel",
            "tooltip" => "Widget.fouramHintBoxTextTooltip"
        ]);

        return $settings->toArray();
    }
}
