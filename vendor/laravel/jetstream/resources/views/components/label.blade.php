@props(['value'])

<label {{ $attributes->merge(['class' => 'custom-label block font-medium text-sm text-themeYellow dark:text-white']) }}>
    {{ $value ?? $slot }}
</label>
