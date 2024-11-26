<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }
    
    public function create()
    {
        return view('categorias.create');
    }
    
    public function store(Request $request)
    {
        Categoria::create($request->all());
        return redirect('categoria')->with('success', 'categoria created successfully.');
    }
    
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }
    
    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());
        return redirect('categoria')->with('success', 'categoria updated successfully.');
    }
    
    public function destroy($id)
    {
        $Categoria = Categoria::findOrFail($id);
        $Categoria->delete();
        return redirect('categoria')->with('success', 'categoria deleted successfully.');
    }
}
