<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Exports\CategoriesExport;

class CatergoyController extends Controller
{
    public function __construct() {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categories = Category::all();
        $categories = Category::paginate(8);
        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //dd($request->all());
        $category               = new Category;
        $category->name         = $request->name;
        $category->description  = $request->description;
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
            $category->image = 'imgs/'.$file;
        }

        if ($category->save()) {
            return redirect('categories')->with('message', 'La Categoria: '.$category->name.' fue Adicionado con Exito!');
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit')->with('category', $category);
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
        $category = Category::find($id);
        $category->name  = $request->name;
        $category->description     = $request->description;
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
            $category->image = 'imgs/'.$file;
        }

        if ($category->save()) {
            return redirect('categories')->with('message', 'La Categoria: '.$category->name.' fue Modificado con Exito!');
        }
    }


   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $category = Category::find($id);
       if ($category->delete()) {
            return redirect('categories')->with('message', 'La Categoria: '.$category->name.' ha sido eliminado');
       }
    }

    
    public function pdf() {
        $categories = Category::all();
        $pdf = \PDF::loadView('categories.pdf', compact('categories'));
        return $pdf->download('categories.pdf');
    }

    public function excel() {
        return \Excel::download(new CategoriesExport, 'categories.xlsx');
    }
}
