<?php

// Con il commando -> php artisan make:model Article -mcr  (MIGRATION CONTROLLER RESOURSE)
// se crea questa pagina (controller), la migrazione su database.

namespace App\Http\Controllers;

use App\Models\ArticleExemplo;
use Illuminate\Http\Request;

class ArticleExemploController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('nomedellaroutedellapagina')
        // es.: andare sulla route e fare la modifica della cartella dove si trova: Route::get('/contact', [ArticleExemploController::class, "contact"])->name('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleExemplo  $articleExemplo
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleExemplo $articleExemplo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleExemplo  $articleExemplo
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleExemplo $articleExemplo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticleExemplo  $articleExemplo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleExemplo $articleExemplo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleExemplo  $articleExemplo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleExemplo $articleExemplo)
    {
        //
    }
}
