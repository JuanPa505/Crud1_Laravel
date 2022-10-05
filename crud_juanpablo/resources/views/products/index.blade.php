@extends('layouts.app')

@section('tittle','Home')
    
@section('content')


<div class="flex flex-col ">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 ">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8 ">
      <div class="overflow-hidden  p-10 ">
        <table class="min-w-full ">
          <thead class="border-b bg-blue-500 ">
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">ID</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Nombre</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Marca</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Descripcion</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Precio</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Tamaño</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Creado</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Actualizado</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $row)
                
            <tr class="border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$row->id}}</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$row->name}}</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$row->brand}}</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$row->description}}</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$row->price}}</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$row->size}}</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$row->created_at}}</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$row->updated_at}}</td>
              <td class="flex justify-center">
                <form class="my-5">
                <a href="{{route('products.edit',$row->id)}}" class="bg-green-500 text-white px-4 py-3 mx-2 whitespace-nowrap rounded-lg"><i class="fa-solid fa-pen-to-square"></i></a>
                </form>
                <form action="{{route('products.destroy',$row->id)}}" method="POST" class="my-5">
                  @csrf
                  @method('delete')
                <a class="bg-red-500 text-white px-4 py-3 whitespace-nowrap rounded-lg"><i class="fa-solid fa-trash"></i></a>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection