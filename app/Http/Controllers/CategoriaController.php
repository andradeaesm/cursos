<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Pest\Support\View as SupportView;

class CategoriaController extends Controller
{
    public function index():View
    {
        $categorias = Categoria::all();
        return view('privado.categorias.index', compact('categorias'));
    }

    public function create(): View    {
        return view('privado.categorias.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
        ]);
        Categoria::create($dados);
        return redirect()->route('categorias.index')->with('sucesso', 'Categoria criada com sucesso.');
    }

    public function edit(Categoria $categoria):View
    {
        return view('privado.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria):RedirectResponse
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
        ]);
        $categoria->update($dados);
        return redirect()->route('categorias.index')->with('sucesso', 'Categoria atualizada com sucesso.');
    }

    public function destroy(Categoria $categoria):RedirectResponse
    {
        if ($categoria->cursos->count() > 0) {
            return back()->with('erro', 'Não é possível excluir a categoria, pois existem cursos associados a ela.');
        }
        $categoria->delete();
        return redirect()->route('categorias.index')->with('sucesso', 'Categoria excluída com sucesso.');
    }
}
