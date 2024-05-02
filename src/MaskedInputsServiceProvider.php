<?php

namespace DevIDKWHOAMI\MaskedInputs;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MaskedInputsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('masked-inputs')
            ->hasViews()
            ->hasAssets();
    }

    public function packageBooted()
    {
        FilamentAsset::register([
            AlpineComponent::make('masked-input', __DIR__ . '/../dist/masked-inputs.js'),
        ], 'dev-idkwhoami/masked-inputs');
    }
}
