<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Caja cegistradora') }}
        </h2>
    </x-slot>


    <div>
        <!-- componente caja -->
        @if (url()->current() == "http://gestor-app.test/caja")
        <x-caja-registradora></x-caja-registradora>
        @endif
        <!-- componente deposito -->
        @if (url()->current() == "http://gestor-app.test/deposito")
        <x-panel></x-panel>

        @endif
        <!-- componente estadisticas -->
        @if (url()->current() == "http://gestor-app.test/estadisticas")
        <x-panel></x-panel>

        @endif
        <!-- componentes productos -->
        @if (url()->current() == "http://gestor-app.test/productos")
        <x-panel></x-panel>

        @endif
        <!-- componente backUp -->
        @if (url()->current() == "http://gestor-app.test/backup")
        <x-panel></x-panel>

        @endif
        <!-- componente local -->
        @if (url()->current() == "http://gestor-app.test/locales")
        <x-panel></x-panel>

        @endif
        <!-- componente configuracion -->
        @if (url()->current() == "http://gestor-app.test/config")
        <x-panel></x-panel>

        @endif

    </div>

</x-app-layout>
