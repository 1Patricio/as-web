@extends('layouts.base')

@section('titulo', 'Criar')

@section('conteudo')
<h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark text-center">Cadastro de Produtos</h1>
<form action="{{ url('produto') }}" method="POST" class="max-w-sm mx-auto">
    @csrf
    <div class="mb-3">
        <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Descrição:</label>
        <input type="textarea" id="descricao" name="descricao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cadastre sua Categoria" required />
    </div>

    <div class="mb-3">
        <label for="preco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Preço:</label>
        <input type="number" id="preco" name="preco" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Preço" required />
    </div>

    <div class="mt-4">
        <label for="categoria_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escolha uma categoria</label>
        <select id="categoria_id" name="categoria_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Escolha uma categoria</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->descricao }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Criar Categoria</button>
</form>
@endsection