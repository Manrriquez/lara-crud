<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;




class ProductController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy('id')->paginate(5);

        return view('products.index', [
            'categories' => $categories,
            'products' => $products
        ]);

    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
    {

        $categories = Category::all();
        $products = Product::orderBy('id');

        return view('products.create', [
            'categories' => $categories,
            'products' => $products
        ]);
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
            'price' => 'required',
            'id_category' => 'required',

        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->id_category = $request->id_category;
        $product->save();


        return redirect()->route('products.index')
        ->with('success','Produtos criado com sucesso!.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\pro$product  $product
    * @return \Illuminate\Http\Response
    */

    public function show()
    {
        //return view('products.index',compact('product'));

        $categories = Category::all();
        $products = Product::orderBy('id')->paginate(5);

        return view('products.index', [
            'categories' => $categories,
            'products' => $products
        ]);

        
    } 

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function edit(Product $product, Category $categories)
    {
 
        $categories = Category::all();
       // $product = Product::find('id');

        return view('products.edit', [
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\pro$product  $product
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'id_category' => 'required',        
        ]);

        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->id_category = $request->id_category;
        
        $product->save();

        return redirect()->route('products.index')
        ->with('success','Produto atualizado com sucesso!');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','Produto excluido com sucesso!');
    }
}
