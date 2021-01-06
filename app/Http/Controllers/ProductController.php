<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create'); 
        //cand apas pe create imi afiseaza un formular cu 2 input-uri din create.blade.php
        //preia din formular datele
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'code' => 'required', 'image' => 'required', 'price' => 'required', 'description' => 'required']); //daca nu se completeaza da eroare
        // create new task
        Product::create($request->all());
        //preia toate datele si le trimite prin create in tabela task
        return redirect()->route('products.index')->with('success', 'Your product was added successfully!');
        //redirecteaza spre task index care afiseaza toate datele ordonate dupa nume
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id); //cauta in task id-ul
        return view('products.show',compact('product')); //butonul de show extrage din baza de date description si

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
        //cu find se pozitioneaza pe id-ul respectiv, va umple edit-ul cu ce introducem

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
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
            'image' => 'required',
            'price' => 'required',
            'description' => 'required'
            ]);
            Product::find($id)->update($request->all());
            return redirect()->route('products.index')->with('success','Product updated successfully');
            //toate request-urile primite de pe formularul meu fac un update in task pe id-ul respectiv
            //ma pozitionez pe element iar tot ce am completat in campuri se introduce in baza de date
            //se face si un required ca sa nu raman goale
            //acesta este adminul care se continua cu login/logout - pe parte de administrator
            //in loc de task vom avea produse
            //se adauga sistemul de autentificare
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success','Product removed successfully');
    }
}
