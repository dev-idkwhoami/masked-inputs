@php
    use \Filament\Support\Facades\FilamentAsset;
    $options = $getOptions();

@endphp
<x-dynamic-component
        :component="$getFieldWrapperView()"
        :field="$field"
>
    <div
            ax-load
            ax-load-src="{{ FilamentAsset::getAlpineComponentSrc('masked-input', 'dev-idkwhoami/masked-inputs') }}"
            x-ignore
            x-data="maskedInput({ state: $wire.$entangle('{{ $getStatePath() }}'), options: {{ $options }} })"
    >
        <x-filament::input.wrapper>
            <x-filament::input type="text" x-ref="maskedInput"/>
        </x-filament::input.wrapper>
    </div>
</x-dynamic-component>
