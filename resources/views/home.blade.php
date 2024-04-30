<x-layout>
    <x-slot name="title">
        {{ __('Inicio') }}
    </x-slot>
    <div class="">
        <h1>Inicio</h1>
    </div>

    <x-alert type='type' class="mb-4">
        <x-slot name="title">
            Alerta Informativa!!
        </x-slot>
        Contenido de la Alerta
    </x-alert>

    <x-alert type='danger' class="mb-4">
        <x-slot name="title">
            Alerta de Peligro!!
        </x-slot>
        Contenido de la Alerta
    </x-alert>

    <x-alert type='success' class="mb-4">
        <x-slot name="title">
            Alerta de Exito!!
        </x-slot>
        Contenido de la Alerta
    </x-alert>

    <x-alert type='warning' class="mb-4">
        <x-slot name="title">
            Alerta de Advertencia!!
        </x-slot>
        Contenido de la Alerta
    </x-alert>
</x-layout>
