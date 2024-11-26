@extends('layouts.base')

@section('titulo', 'Editar')

@section('conteudo')
<div class="container">
  <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark text-center">Edite sua Categoria</h1>
  <form action="{{ url('categoria/'.$categoria->id) }}" method="POST" class="max-w-sm mx-auto">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Categoria:</label>
      <input type="textarea" id="nome" name="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Edite sua Categoria" required />
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar Categoria</button>
  </form>
  <br>
</div>
@endsection