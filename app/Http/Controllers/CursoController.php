<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CursoController extends Controller
{
    public function index(): View
    {
        $cursos = Curso::all();
        return view('privado.cursos.index',compact('cursos'));
    }

    public function create(): View
    {
        $categorias = Categoria::all();
        return view('privado.cursos.create', compact('categorias'));
    }

    public function store(Request $request): RedirectResponse
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'categoria_id' => 'required|exists:categorias,id',
            'imagem' => 'image|nullable',
            'valor' => 'required|numeric|',
            'professor' => 'required|string|max:255',
            'duracao' => 'required|string|max:255',
            'vagas' => 'required|integer|min:1|max:30',
        ]);
        if ($request->imagem) {
            $dados['imagem'] = $request->imagem->store('cursos');
        }

        Curso::create($dados);

        return redirect()->route('cursos.index')->with('sucesso', 'Curso criado com sucesso!');
    }

    public function show(Curso $curso): View
    {
        return view('privado.cursos.show', compact('curso'));
    }

    public function edit(Curso $curso): View
    {
        $categorias = Categoria::all();
        return view('privado.cursos.edit', compact('curso', 'categorias'));
    }

    public function update(Request $request, Curso $curso): RedirectResponse
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'categoria_id' => 'required|exists:categorias,id',
            'image' => 'image|nullable',
            'valor' => 'required|numeric',
            'professor' => 'required|string|max:255',
            'duracao' => 'required|string|max:255',
            'vagas' => 'required|integer',
        ]);

        if ($request->imagem) {
            $dados['imagem'] = $request->imagem->store('cursos');
        }

        $curso->update($dados);

        return redirect()->route('cursos.index')->with('sucesso', 'Curso atualizado com sucesso!');
    }

    public function destroy(Curso $curso): RedirectResponse
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
