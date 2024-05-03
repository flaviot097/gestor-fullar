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
    </div>

</x-app-layout>
