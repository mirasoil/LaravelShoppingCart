<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('id','ASC')->paginate(5);
        //afiseaza dupa id nume si asc
        $value=($request->input('page',1)-1)*5;
        return view('products.list',compact('products'))->with('i',$value);
        //afisez un formular pe care il validez in store
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create'); 
        //cand apas pe create imi afiseaza un formular cu 2 input-uri din create.blade.php
        //preia din formular datele
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'code' => 'required', 'image' => 'required', 'price' => 'required', 'description' => 'required']); //daca nu se completeaza da eroare
        // creaza un nou produs
        Product::create($request->all());
        //preia toate datele si le trimite prin create in tabela products (tbl_product in cazul meu)
        return redirect()->route('products.index')->with('success', 'Your product was added successfully!');
        //redirecteaza spre prodcut index care afiseaza toate datele ordonate dupa nume si mesajul de succes
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id); //cauta in produse id-ul
        return view('products.show',compact('product')); //butonul de show extrage din baza de date description si inca ceva

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
        //cu find se pozitioneaza pe id-ul respectiv, va umple edit-ul cu ce introducem

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
            'image' => 'required',
            'price' => 'required',
            'description' => 'required'
            ]);
            Product::find($id)->update($request->all());
            return redirect()->route('products.index')->with('success','Product updated successfully');
            //toate request-urile primite de pe formularul meu fac un update in product pe id-ul respectiv
            //ma pozitionez pe element iar tot ce am completat in campuri se introduce in baza de date
            //se face si un required ca sa nu ramana goale
            //acesta este adminul care se continua cu login/logout - pe parte de administrator
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::find($id)->delete(); //stergearea produsului si redirecatrea pe pagina de index cu mesajul specific
        return redirect()->route('products.index')->with('success','Product removed successfully');
    }
}
