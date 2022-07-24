<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;



class CategoryController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $data['categories'] = Category::orderBy('id')->paginate(5);
        return view('categories.index', $data);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
    {
        //dd(Category::get()->first()->products);
        return view('categories.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */



    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',

        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index')
        ->with('success','Categoria criado com sucesso!.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\category  $category
    * @return \Illuminate\Http\Response
    */

    public function show(Category $category)
    {
        return view('show',compact('category'));
    } 

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Category  $category
    * @return \Illuminate\Http\Response
    */

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\category  $category
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.index')
        ->with('success','Categoria atualizado com sucesso!');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Category  $category
    * @return \Illuminate\Http\Response
    */

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
        ->with('success','Categoria excluido com sucesso!');
    }
}
