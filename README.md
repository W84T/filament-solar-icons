<p class="filament-hidden" align="center">
    <img src="https://your-domain.com/images/filament-solar-icons.png" alt="Banner" style="width: 100%; max-width: 800px;" />
</p>

# Filament Solar Icons Icons

A Solar Icons icon set implementation for [Filament Icons](https://github.com/filafly/filament-icons), allowing for instant replacement of all icons used within the Filament framework.

## Installation

You can install the package via composer:

```bash
composer require w84t/filament-solar-icons
```

After the package is installed, you must register the plugin in your Filament Panel provider:

```php
 Icons\Solar IconsIcons;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(Solar IconsIcons::make());
}
```

<!--
## Setting the global icon style

Solar Icons icons come in multiple styles that you can switch between. Available styles include:

- Regular (default)
- Bold
- Light
- - Bold (default)
- Bold-duotone
- Broken
- Line-duotone
- Linear
- Outline

You can change the style using the following methods:

```php
Solar IconsIcons::make()->regular();
Solar IconsIcons::make()->bold();
Solar IconsIcons::make()->light();
SolarIcons::make()->bold();
SolarIcons::make()->bold-duotone();
SolarIcons::make()->broken();
SolarIcons::make()->line-duotone();
SolarIcons::make()->linear();
SolarIcons::make()->outline();
```

## Setting style for a subset of icons

If you need to override certain icons to use a different style, you can use either icon aliases or icon enum cases.

### Using icon aliases
Use the `overrideStyleForAlias` method with a [Filament Icon Alias](https://filamentphp.com/docs/4.x/styling/icons#available-icon-aliases). This method works with either a single icon key (string) or multiple icon keys (array).

```php
use W84T\Icons\Solar Icons\Solar IconsIcons;
use W84T\Icons\Solar Icons\Enums\Solar IconsStyle;
use Filament\Tables\View\TablesIconAlias;
use Filament\Actions\View\ActionsIconAlias;

// Override a single icon key
Solar IconsIcons::make()->overrideStyleForAlias(TablesIconAlias::ACTIONS_FILTER, Solar IconsStyle::Bold);

// Override multiple icon keys at once
Solar IconsIcons::make()->overrideStyleForAliases([
    TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => Solar IconsStyle::Bold,
    TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => Solar IconsStyle::Light,
    ActionsIconAlias::MODAL_CLOSE_BUTTON => Solar IconsStyle::Regular,
]);
```

### Using icon enum cases
Use the `overrideStyleForIcon` method with a Solar Icons icon enum case:

```php
use W84T\Icons\Solar Icons\Solar IconsIcons;
use W84T\Icons\Solar Icons\Enums\Solar Icons;
use W84T\Icons\Solar Icons\Enums\Solar IconsStyle;

// Override a specific icon
Solar IconsIcons::make()->overrideStyleForIcon(Solar Icons::Check, Solar IconsStyle::Bold);

// Override multiple icons at once
Solar IconsIcons::make()->overrideStyleForIcons([
    Solar Icons::Check => Solar IconsStyle::Bold,
    Solar Icons::X => Solar IconsStyle::Light,
    Solar Icons::ArrowRight => Solar IconsStyle::Regular,
]);
```


## Overriding individual icons

You can change which icon is used for any given Filament alias:

### Using icon aliases
```php
use W84T\Icons\Solar Icons\Solar IconsIcons;
use W84T\Icons\Solar Icons\Enums\Solar Icons;
use Filament\Tables\View\TablesIconAlias;
use Filament\Actions\View\ActionsIconAlias;

// Override a single alias
Solar IconsIcons::make()->overrideAlias(TablesIconAlias::ACTIONS_FILTER, Solar Icons::FunnelSimple);

// Override multiple aliases at once
Solar IconsIcons::make()->overrideAliases([
    TablesIconAlias::ACTIONS_FILTER => Solar Icons::FunnelSimple,
    ActionsIconAlias::BUTTON_GROUP_DROPDOWN_INDICATOR => Solar Icons::CaretUpDown,
]);
```

### Using icon enum cases
```php
use W84T\Icons\Solar Icons\Solar IconsIcons;
use W84T\Icons\Solar Icons\Enums\Solar Icons;

// Replace every instance of one icon with another
Solar IconsIcons::make()->overrideIcon(Solar Icons::User, Solar Icons::UserCircle);

// Replace multiple icons at once
Solar IconsIcons::make()->overrideIcons([
    Solar Icons::User => Solar Icons::UserCircle,
    Solar Icons::Heart => Solar Icons::HeartFilled,
]);
```

## Credits

- [Solar Icons](https://example.com) for the icon library
- [Filament Icons](https://github.com/filafly/filament-icons) for the base icon system

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
