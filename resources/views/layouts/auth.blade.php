<x-layouts.base>

    <div class="relative bg-white overflow-hidden">

        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <img class="w-auto object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" style="height:100vh" src="/img/bg-3.png" alt=""> 
            </div>
             <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10" style="padding-top:25vh">
              
                <div class="grid grid-cols-5 gap-4">                    
                    <img class="h-3/4 align-middle inline-block" src="/img/Sp.png" alt="">
                    <img class="h-3/4 align-middle inline-block" src="/img/bej.png" alt="">
                    <img class="mt-4 align-middle inline-block" src="/img/ilo.png" alt="">
                    <img class="h-3/4 align-middle inline-block" src="/img/logobc150.png" alt="">
                    <img class="h-3/4 align-middle inline-block" src="/img/logo-poltek.png" alt="">
                </div>
                <h1 class="text-2xl font-semibold text-gray-900 my-4">Customs Excise Simulation</h1>
                
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layouts.base>
