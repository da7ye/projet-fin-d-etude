@props(['value'])

<label {{ $attributes->merge(['class' => ' font-medium text-sm text-gray-100']) }}>
    {{ $value ?? $slot }}
</label>
{{--   --}}