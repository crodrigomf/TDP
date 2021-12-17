<x-app-layout>

<h1>Você está em sua página de plantas</h1>
<table class=" bg-white max-w-7xl mx-auto sm:px-6 lg:px-8">
   <tr>
      <th>Popular</th>
      <th>Cientifico</th>
      <th>Quantidade</th>
   </tr>
   @foreach (Auth::user()->plantas as $planta)
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
            <a href="{{route("deleteplanta",$planta)}}">Deletar</a>
         </td>
      </tr> 
   @endforeach
</table>
<p>
<a href="{{ route('plantas.create') }}">Inserir</a>
</p>
<x-slot name="header">

   Plantas

</x-slot>


</x-app-layout>