<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $prodotti = Product::all();
        return view('products.index', compact('prodotti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // METODO CLASSICO
        // $data = $request->all();

        // $newProduct = new Product();

        // $newProduct->title = $data['title'];
        // $newProduct->cooking_time = $data['cooking_time'];

        // $newProduct->save();

        // return redirect()->route('products.show', $newProduct->id);
        
        //METODO 2 CON FILLABLE
        $data = $request->all();
         $newProduct = new Product();
         $newProduct = Product::create($data);
         return redirect()->route('products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $prodotto = Product::findOrFail($id);
        if($prodotto){
            return view('products.show', compact('prodotto'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodotto = Product::findOrFail($id);
        return view('products.edit', compact('prodotto'));
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
        $data = $request->all();
        
        //Metodo 1 CLASSICO
        // $product = Product::findOrFail($id);

        // $product->title = $data['title'];
        // $product->cooking_time = $data['cooking_time'];

        // $product->save();

        // return redirect()->route('products.show', $product->id);

        //Metodo 2 CON FILLABLE
        $product->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
