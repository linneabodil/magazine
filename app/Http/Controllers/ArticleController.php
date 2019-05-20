<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Article::all();
    }

    public function inredning() 
    {
        $inredning = Article::where('category_id', '0')->orderBy('rank', 'DESC')->get();
        return view('inredning', [
            'items' => $inredning
        ]);
    }

    public function mode() 
    {
        $mode = Article::where('category_id', '1')->orderBy('rank', 'DESC')->get();
        return view('mode', [
            'items' => $mode
        ]);
    }

    public function horoskop() 
    {
        $horoskop = Article::where('category_id', '2')->orderBy('rank', 'DESC')->get();
        return view('horoskop', [
            'items' => $horoskop
        ]);
    }

    public function traning() 
    {
        $traning = Article::where('category_id', '3')->orderBy('rank', 'DESC')->get();
        return view('traning', [
            'items' => $traning
        ]);
    }

    public function kost() 
    {
        $kost = Article::where('category_id', '4')->orderBy('rank', 'DESC')->get();
        return view('kost', [
            'items' => $kost
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function secret() {
      if(Gate::allows('admin-only', auth()->user())) {
        return view('secret');
      }
      return "You are trash.";
    }
}
