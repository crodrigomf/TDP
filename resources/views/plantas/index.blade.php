<x-app-layout>

<h1>Você está em sua página de plantas</h1>
@foreach (Auth::user()->plantas as $planta)
   <p> {{$planta->popular}} </p>
@endforeach

<a href="{{ route('plantas.create') }}">Inserir</a>

<x-slot name="header">

   Plantas

</x-slot>


</x-app-layout>