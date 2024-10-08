<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLivroRequest;
use App\Http\Requests\UpdateLivroRequest;
use App\Models\Livro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(isset($request->search)) {
            $livros = Livro::where('autor','LIKE',"%{$request->search}%")
                            ->orWhere('titulo','LIKE',"%{$request->search}%")->paginate(5);
        } else{
        $livros = Livro::paginate(5);
        }

        return view('livros.index',[
            'livros'=>$livros
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livros.create',[
            'livro'=> new Livro
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivroRequest $request)
    {
        if(is_null(Auth::user())){
            session()->flash('alert-danger','Você precisa estar logado.');
            return view('empty');}
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livro = Livro::create($validated);
        request()->session()->flash('alert-info','Livro cadastrado com sucesso');

        return redirect("/livros/{$livro->id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        return view('livros.show',[
            'livro'=>$livro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        return view('livros.edit',[
            'livro'=>$livro
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLivroRequest $request, Livro $livro)
    {
        if(is_null(Auth::user())){
            session()->flash('alert-danger','Você precisa estar logado.');
            return view('empty');}
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $livro->update($validated);
        request()->session()->flash('alert-info','Livro atualizado com sucesso');
        
        return redirect("/livros/{$livro->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect('/livros');
    }
}
