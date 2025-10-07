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
 use W84T\Icons\SolarIcons\SolarIcons;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(SolarIcons::make());
}
```


## Setting the global icon style

Solar Icons icons come in multiple styles that you can switch between. Available styles include:


- Outline
- Broken
- Linear
- Bold
- Bold-duotone
- Line-duotone

You can change the style using the following methods:

```php
SolarIcons::make()->bold();
SolarIcons::make()->bold_duotone();
SolarIcons::make()->broken();
SolarIcons::make()->line_duotone();
SolarIcons::make()->linear();
SolarIcons::make()->outline();
```

## Setting style for a subset of icons

If you need to override certain icons to use a different style, you can use either icon aliases or icon enum cases.

### Using icon aliases
Use the `overrideStyleForAlias` method with a [Filament Icon Alias](https://filamentphp.com/docs/4.x/styling/icons#available-icon-aliases). This method works with either a single icon key (string) or multiple icon keys (array).

```php
use W84T\Icons\SolarIcons\SolarIcons;
use W84T\Icons\SolarIcons\Enums\SolarStyle;
use Filament\Tables\View\TablesIconAlias;
use Filament\Actions\View\ActionsIconAlias;

// Override a single icon key
SolarIcons::make()->overrideStyleForAlias(TablesIconAlias::ACTIONS_FILTER, Solar IconsStyle::Bold);

// Override multiple icon keys at once
SolarIcons::make()->overrideStyleForAliases([
    TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => SolarStyle::Bold,
    TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => SolarStyle::Light,
    ActionsIconAlias::MODAL_CLOSE_BUTTON => SolarStyle::Regular,
]);
```

### Using icon enum cases
Use the `overrideStyleForIcon` method with a Solar enum case:

```php
use W84T\Icons\SolarIcons\SolarIcons;
use W84T\Icons\SolarIcons\Enums\Solar;
use W84T\Icons\SolarIcons\Enums\SolarStyle;

// Override a specific icon
SolarIcons::make()->overrideStyleForIcon(Solar::Check, SolarStyle::Bold);

// Override multiple icons at once
SolarIcons::make()->overrideStyleForIcons([
    Solar::Check => SolarStyle::Bold,
    Solar::X => SolarStyle::Light,
    Solar::ArrowRight => SolarStyle::Regular,
]);
```


## Overriding individual icons

You can change which icon is used for any given Filament alias:

### Using icon aliases
```php
use W84T\Icons\SolarIcons\SolarIcons;
use W84T\Icons\SolarIcons\Enums\Solar;
use Filament\Tables\View\TablesIconAlias;
use Filament\Actions\View\ActionsIconAlias;

// Override a single alias
SolarIcons::make()->overrideAlias(TablesIconAlias::ACTIONS_FILTER, Solar::FunnelSimple);

// Override multiple aliases at once
SolarIcons::make()->overrideAliases([
    TablesIconAlias::ACTIONS_FILTER => Solar::FunnelSimple,
    ActionsIconAlias::BUTTON_GROUP_DROPDOWN_INDICATOR => Solar::CaretUpDown,
]);
```

### Using icon enum cases
```php
use W84T\Icons\SolarIcons\SolarIcons;
use W84T\Icons\SolarIcons\Enums\Solar;

// Replace every instance of one icon with another
SolarIcons::make()->overrideIcon(Solar::User,Solar::UserCircle);

// Replace multiple icons at once
SolarIcons::make()->overrideIcons([
    Solar::User => Solar::UserCircle,
    Solar::Heart => Solar::HeartFilled,
]);
```

## Credits

- [Solar Icons](https://github.com/codeat3/blade-solar-icons) for the icon library
- [Filament Icons](https://github.com/filafly/filament-icons) for the base icon system

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
