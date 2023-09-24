@props(['route', 'label'])

<a href="{{ route($route) }}">
    <button type="button" class='rounded-full bg-blue-100 hover:bg-blue-500 py-2 px-4'>
        {{ $label }}
    </button>
</a>
