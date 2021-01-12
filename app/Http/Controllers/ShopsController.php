<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopsController extends Controller
{
    public function index(){
        $shops = Shop::all();
        return view('shops', compact('shops'));
    }
    public function cart(){
        return view('cart');
    }
    //se preia produsul si se verifica daca acesta exista sau nu
    public function addToCart($id){
        $shop = Shop::find($id);
        if(!$shop) {
        abort(404);
    }
    //verificam daca exista un cos in sesiune
    $cart = session()->get('cart');
    // dacă cart este gol se pune primul product
    if(!$cart) {
    $cart = [
        $id => [
            "name" => $shop->name,
            "quantity" => 1,
            "price" => $shop->price,
            "image" => $shop->image
        ]
    ];
    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product successfully added to cart!');
    }
    // daca cart nu este gol at verificam daca produsul exista pt a incrementa cantitate
    if(isset($cart[$id])) {
        $cart[$id]['quantity']++;
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product successfully added to cart!');
    }
    // daca item nu exista in cos at addaugam la cos cu quantity = 1
 $cart[$id] = [
    "name" => $shop->name,
    "quantity" => 1,
    "price" => $shop->price,
    "image" => $shop->image
    ];
    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product successfully added to cart!');
    }

    public function update(Request $request){
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated!');
        }
    }
     
//PUT REQUEST
// function updateCourse(){
//     axios
//         .patch('/shop',    //tipul cererii si destinatia
//         {                                            //la post, datele se pot specifica direct in corpul metodei
//             id: ?
//         })
//         .then(res => showOutput(res))
// }

    public function remove(Request $request){
        if($request->id) {
        $cart = session()->get('cart');
        if(isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
            }
        session()->flash('success', 'Product successfully deleted!');
        }  
    }
    //Confirmarea comenzii care initial ne redirecta pe pagina confirm cu un mesaj specific dar acum doar goleste cosul si afiseaza un mesaj
    public function confirm(){
        session()->forget('cart');
        return redirect()->back()->with('success', 'Order placed succesfully!!');
    }
    //Functie ce gleste cosul si returneaza un mesaj specific
    public function empty(){
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart empty!');
        } 
}
