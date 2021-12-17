<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    TDP
                    <a href="{{ route('plantas.index') }}"> Listar suas Plantas</a>
                </div>
            </div>
        </div>
    </div>
  
    <div>
              
        <table class=" bg-white max-w-7xl mx-auto sm:px-6 lg:px-8">
            <tr>
               <th>Popular</th>
               <th>Cientifico</th>
               <th>Quantidade</th>
               <th>Nome do Dono</th>
               <th>Telefone</th>
            </tr>
            @foreach (\App\Models\Plantas::where("user_id", "<>", Auth::user()->id)->get() as $planta)
               <tr> 
                  <td> 
                     {{$planta->popular}} 
                  </td>
                  <td> 
                     {{$planta->cientifico}} 
                  </td>
                  <td> 
                     {{$planta->quantidade}} 
                  </td>
                  <td>
                    {{$planta->dono->name}}
                  </td>
                  <td>
                    {{$planta->dono->telefone}} 
                  </td>
             @endforeach
    </div>
   
</x-app-layout>
