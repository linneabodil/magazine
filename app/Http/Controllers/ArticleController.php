<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
        if ($user = Auth::check()) {
            $inredning = Article::where('category_id', '0')->orderBy('rank', 'DESC')->get();
            return view('inredning', [
                'items' => $inredning
            ]);
        } else {
            $inredning = Article::where('category_id', '0')->where('extra', '0')->orderBy('rank', 'DESC')->get();
            return view('inredning', [
                'items' => $inredning
            ]);
        }
    }

    public function mode()
    {
        if ($user = Auth::check()) {
            $mode = Article::where('category_id', '1')->orderBy('rank', 'DESC')->get();
            return view('mode', [
                'items' => $mode
            ]);
        } else {
            $mode = Article::where('category_id', '1')->where('extra', '0')->orderBy('rank', 'DESC')->get();
            return view('mode', [
                'items' => $mode
            ]);
        }
    }

    public function horoskop()
    {
        if ($user = Auth::check()) {
            $horoskop = Article::where('category_id', '2')->orderBy('rank', 'DESC')->get();
            return view('horoskop', [
                'items' => $horoskop
            ]);
        } else {
            $horoskop = Article::where('category_id', '2')->where('extra', '0')->orderBy('rank', 'DESC')->get();
            return view('horoskop', [
                'items' => $horoskop
            ]);
        }
    }

    public function traning()
    {
        if ($user = Auth::check()) {
            $traning = Article::where('category_id', '3')->orderBy('rank', 'DESC')->get();
            return view('traning', [
                'items' => $traning
            ]);
        } else {
            $traning = Article::where('category_id', '3')->where('extra', '0')->orderBy('rank', 'DESC')->get();
            return view('traning', [
                'items' => $traning
            ]);
        }
    }

    public function kost()
    {
        if ($user = Auth::check()) {
            $kost = Article::where('category_id', '4')->orderBy('rank', 'DESC')->get();
            return view('kost', [
                'items' => $kost
            ]);
        } else {
            $kost = Article::where('category_id', '4')->where('extra', '0')->orderBy('rank', 'DESC')->get();
            return view('kost', [
                'items' => $kost
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Börja med en validering
        $validator = Validator::make($request->all(), [
            'title'    => 'required|unique:articles|max:100',
            'ingress'    => 'required|unique:articles|max:100',
            'text'    => 'required|unique:articles|max:100',
        ]);
        if ($validator->fails()) {
            return redirect('articles/create')
                ->withErrors($validator)
                ->withInput();
        }

        Article::create($request->all());

        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.show', [
            'article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.edit', [
            'article' => $article
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = Input::get('title');
        $article->ingress = Input::get('ingress');
        $article->text = Input::get('text');

        $article->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('articles');
    }

    public function admin() {
      if(Gate::allows('admin-only', auth()->user())) {
          $articles = Article::all();
        return view('admin', [
            'items' => $articles
        ]);
      }
      return "Endast för admins.";
    }

    public function articlesEdit() {
      if(Gate::allows('admin-only', auth()->user())) {
        return "Hello";
      };
      return "No.";
    }
}
