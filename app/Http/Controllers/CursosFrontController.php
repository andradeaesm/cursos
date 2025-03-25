<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosFrontController extends Controller
{
    public function index()
    {
        $cursos = Curso::with('categoria')->get();
        return view ('front.cursos.index', compact('cursos'));
    }

    public function details(Curso $curso)
    {
        return view ('front.cursos.detail', compact('curso'));
    }
}
