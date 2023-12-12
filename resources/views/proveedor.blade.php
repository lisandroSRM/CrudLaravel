@extends('layouts.plantilla')

@section('titulo', 'Crud')

@section('contenido')

    <div>
        <div class="mt-20 container mx-auto flex flex-col">
            <h1 class="text-4xl mb-3 text-center">Proveedor</h1>
        </div>
        <div class="relative overflow-x auto mt-5">
            <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Proveedor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actualizar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Eliminar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datos as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->proveedor}}
                        </th>
                        <td class="px-6 py-4">
                            <form action="{{route('crud.editProveedor', $item->id)}}" method="GET">
                                <button type="submit"
                                    class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    Actualizar</button>
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{route('crud.showProveedor', $item->id)}}" method="GET">
                                <button type="submit"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('crud.createProveedor')}}">
                <button type="button"
                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-3">Agregar
                    Proveedor</button>
            </a>
            <a href="{{ route('crud.index') }}">
                <button type="button"
                    class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-3">Regresar</button>
            </a>
        </div>
    </div>

@endsection
