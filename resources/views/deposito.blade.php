<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Deposito') }}
        </h2>
    </x-slot>


    <div>
        <!-- componente deposito -->
        @if (url()->current() == "http://gestor-app.test/deposito")
        <x-box-default>
        </x-box-default>
        @endif
    </div>

</x-app-layout>

<script>
    const btnCreate=document.querySelector(".btn.crear")
    console.log(btnCreate);
    btnCreate.addEventListener("click",()=>{console.log("se apreto")})
</script>

