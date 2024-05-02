# A Filament PHP plugin for masking text inputs

This package provides a MaskedInput field for masking text values in [Filament PHP](https://github.com/filamentphp/filament).

## Installation

**NOTE** that this package is currently only compatible with Filament v3, and there are currently no plans to release a v2
compatible version.

You can install the package via composer:

```bash
composer require dev-idkwhoami/masked-inputs
```

Then publish the assets in your app:

```bash
php artisan filament:assets
```

## MaskedInput Field Usage

Right now this is the only supported way to configure the js script but it allows for pretty much everything the library has to offer.

`->options()` expects a `RawJS` object which will get rendered as a JS object.

```php
use DevIDKWHOAMI\MaskedInputs\Forms\Components\MaskedInput;

MaskedInput::make('price')
    ->options(RawJs::make(<<<'JS'
            { mask: Number, scale: 2, thousandsSeparator: '.', padFractionalZeros: true, normalizeZeros: true, radix: ',', mapToRadix: ['.'], autofix: true }
        JS))
```

```js
// how the plugin is normaly used
const mask = IMask(element, maskOptions);
```

```bladehtml
<!-- How the plugins uses it -->
const mask = IMask(element, {{ $options }});
```

This way `->options()` gives you 100% control over `maskOptions`

Read more on how to define your masks here [Guide Masks](https://imask.js.org/guide.html#masked)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [dev-idkwhoami](https://github.com/dev-idkwhoami)
- [All Contributors](../../contributors)

This package is based on the JavaScript library [imask js](https://imask.js.org/).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
