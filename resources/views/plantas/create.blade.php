<x-app-layout>
    <x-slot name="header"> Adicionar Plantas </x-slot>

<form  action="{{ route('plantas.store') }}" method="POST">
@csrf
<input type= "text" name="popular" placeholder="popular">
<input type= "text" name="cientifico" placeholder="cientifico">
<input type= "number" name="quantidade" placeholder="quantidade">
<input type="submit">
</form>
</x-app-layout>