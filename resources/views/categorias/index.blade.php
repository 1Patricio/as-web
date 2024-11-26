@extends('layouts.base')

@section('titulo', 'Listar')

@section('conteudo')
<main class="flex justify-center">
    <div class="w-full max-w-4xl p-3">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark text-center">Lista de Categorias</h1>
        <div class="relative overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                    <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 text-center">{{ $categoria->id }}</td>
                        <td class="px-6 py-4">{{ $categoria->descricao }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ url('categoria/'.$categoria->id.'/edit') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</a>
                            <form action="{{ url('categoria/'.$categoria->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
