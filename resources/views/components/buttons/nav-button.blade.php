@props(['id', 'onClick', 'label'])

<button id="{{ $id }}" type="button" class='rounded-full bg-blue-100 hover:bg-blue-500 py-2 px-4' onclick="{{ $onClick }}">
    {{ $label }}
</button>
