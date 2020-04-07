<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Article;
use App\Category;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesFil  = Category::all();
        $categories     = Category::all();
        $articles       = Article::orderBy('id', 'desc')->take(20)->get();
        return view('welcome')  ->with('categories', $categories)
                                ->with('categoriesFil', $categoriesFil)
                                ->with('articles', $articles);
    }

    public function filter($id){
        $categoriesFil  = Category::all();
        $categories     = collect();
        $categories->push(Category::find($id));
        $articles       = Article::where('category_id', $id)->get(); 
        return view('welcome')  ->with('categories', $categories)
                                ->with('categoriesFil', $categoriesFil)
                                ->with('articles', $articles);
    }

    public function loadcat(Request $request){
        if($request->cid == 0) {
            $categories     = Category::all();
            $articles       = Article::all();            
            return view('loadcat')  ->with('categories', $categories)
                                    ->with('articles', $articles);
        } else {
            $category       = Category::where('id', $request->cid)->first();
            $articles       = Article::where('category_id', $request->cid)->get();            
            return view('loadcat')  ->with('category', $category)
                                    ->with('articles', $articles);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
