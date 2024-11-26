@extends('layouts.base')

@section('titulo', 'Listar Produto')

@section('conteudo')
<main class="flex justify-center">
    <div class="w-full max-w-4xl p-3">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark text-center">Lista de Produtos</h1>
        <div class="relative overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Descricao</th>
                        <th scope="col" class="px-6 py-3">Preço</th>
                        <th scope="col" class="px-6 py-3">Categoria</th>
                        <th scope="col" class="px-6 py-3 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)
                    <tr class="bg-gray border-b dark:bg-gray-800 dark:border-gray-700 text-white">
                        <td class="px-6 py-4 text-center">{{ $produto['id'] }}</td>
                        <td class="px-6 py-4">{{ $produto['descricao'] }}</td>
                        <td class="px-6 py-4">{{ $produto['preco'] }}</td>
                        <td class="px-6 py-4 text-center">{{ $produtos->categoria->nome }}</td>
                        <td class="px-6 py-4 flex space-x-2 ">
                            <a href="{{ url('produto/'.$produto->id.'/produto') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</a>
                            <form action="{{ url('produto/'.$produto->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <label for="produto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treinador</label>

                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection