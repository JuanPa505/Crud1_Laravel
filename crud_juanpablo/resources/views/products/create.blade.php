@extends('layouts.app')

@section('tittle','Añadir Productos')

@section('content')
<div class="w-full max-w-xs mx-auto">
  <form action="{{route('products.store')}}" method="POST"
   class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" >
    @csrf
    <h2 class="text-2xl text-center py-4 mb-4 font-bold font-mono">Agregar Productos</h2>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nombre del producto:</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Nombre del producto" name="name">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="brand">Marca del producto:</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="brand" type="text" placeholder="Marca del producto" name="brand">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Descripción del producto:</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="Descripción del producto" name="description">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Precio del producto:</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price"  placeholder="Precio del producto" name="price">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="size">Tamaño del producto:</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="size" placeholder="Tamaño del producto" name="size">
    </div>
    <div class="flex justify-center">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Agrega producto</button>
    </div>
  </form>
</div>
@endsection