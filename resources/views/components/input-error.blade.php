@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => '']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
{{-- text-sm text-red-600 space-y-1 --}}