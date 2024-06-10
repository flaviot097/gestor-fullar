<style>
#icon-panel-caja,
#icon-panel-almacenamiento,
#icon-panel-stads,
#icon-panel-backUp,
#icon-panel-local,
#icon-panel-prod,
#icon-panel-config {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    min-height: 22vh;
    min-width: 15vh;
    max-width: 16vh;;
    margin-top: 20px;
    margin-bottom: 20px;
}</style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-1" id="panel-header" style="justify-content:space-between;min-height: 200px; align-items: center;" >
            <a href="{{url("/caja")}}"><div id="icon-panel-caja" class="ms-4 p-6 text-gray-900 dark:text-gray-100 box-register-container  gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" >
                <img src="{{URL::asset('img/caja-registradora.png')}}" alt="gest-tor" style="height: 65px; width: 65px;" >
                <h3 class="position-relative py-2 px-4 text-bg-secondary rounded-pill" >{{ __("Caja") }}</h3>
            </div></a>
            <a href="{{url("/deposito")}}"><div id="icon-panel-almacenamiento" class="mx-3 p-6 text-gray-900 dark:text-gray-100 box-register-container  gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" >
                <img src="{{URL::asset('img/almacenamiento.png')}}" alt="gest-tor" style="height: 65px; width: 65px;" >
                <h3 class="position-relative py-2 px-4 text-bg-secondary rounded-pill">{{ __("Deposito") }}</h3>
            </div></a>
            <a href="{{url("/estadisticas")}}"><div id="icon-panel-stads" class="p-6 text-gray-900 dark:text-gray-100 box-register-container  gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" >
                <img src="{{URL::asset('img/estadisticas-fina.png')}}" alt="gest-tor" style="height: 65px; width: 65px;" >
                <h3 class="position-relative py-2 px-4 text-bg-secondary rounded-pill">{{ __("Estadisticas") }}</h3>
            </div></a>
            <div id="icon-panel-backUp" class="p-6 text-gray-900 dark:text-gray-100 box-register-container  gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" >
                <img src="{{URL::asset('img/restauracion-copi-seguridad.png')}}" alt="gest-tor" style="height: 65px; width: 65px;" >
                <h3 class="position-relative py-2 px-4 text-bg-secondary rounded-pill">{{ __("Respaldo") }}</h3>
            </div>
            <a href="{{url("/Stock")}}"><div id="icon-panel-local" class="p-6 text-gray-900 dark:text-gray-100 box-register-container  gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" >
                <img src="{{URL::asset('img/local.png')}}" alt="gest-tor" style="height: 65px; width: 65px;" >
                <h3 class="position-relative py-2 px-4 text-bg-secondary rounded-pill">{{ __("Local") }}</h3>
            </div></a>
            <div id="icon-panel-prod" class="p-6 text-gray-900 dark:text-gray-100 box-register-container  gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" >
                <img src="{{URL::asset('img/productos.svg')}}" alt="gest-tor" style="height: 65px; width: 65px;" >
                <h3 class="position-relative py-2 px-4 text-bg-secondary rounded-pill">{{ __("Productos") }}</h3>
            </div>
            <div id="icon-panel-config" class="p-6 text-gray-900 dark:text-gray-100 box-register-container  gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" style="margin-right: 20px;" >
                <img src="{{URL::asset('img/configuracion.svg')}}" alt="gest-tor" style="height: 65px; width: 65px;" >
                <h3 class="position-relative py-2 px-4 text-bg-secondary rounded-pill">{{ __("Configuracion") }}</h3>
            </div>
        </div>
    </div>
</div>
