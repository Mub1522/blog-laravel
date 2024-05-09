<x-layout>
    <x-slot name="title">
        {{ __('Posts') }}
    </x-slot>

    <h1>Posts</h1>

    <x-alert type='info' class="mb-4">
        <x-slot name="title">
            Alerta Informativa!!
        </x-slot>
        Contenido de la Alerta
    </x-alert>

</x-layout>
