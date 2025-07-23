<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\productsModel;

use App\Http\Requests\StorecartRequest;
use App\Http\Requests\UpdatecartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
   
    public function index()
    {
        //$data=DB::table('products')->leftJoin('cart','product_id','=','id')->get();
        //return view('orders/indexOrder', ['products'=>$data]);
       $data = cart::latest()->paginate(10);
        return view('cart/cart', compact('data'))->with('i', (request()->input('page', 1) - 1 * 10));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=productsModel::all();
        return view('cart/cartOrderstest',  compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
       $request->validate(
            [
                "product_id" => "required",
                "quantity" => "required",
                
            ]
        );

        

        $cart = new cart();
        $cart ->product_id = $request->product_id;
        $cart ->quantity = $request->quantity;
        
       
        $cart->save();

        return redirect()->route('cart.index')->with('success', 'comanda adaugata');
    }
        

    /**
     * Display the specified resource.
     */
    public function show(cart $cart)
    {
        return view('show', compact("products"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cart $cart)
    {
        //return view('edit', compact("cart"));
        //return view('products/edit', compact("product"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecartRequest $request, cart $cart)
    {
        $request->validate(
            [
                "product_id" => "required",
                "quantity" => "required",
                
            ]
        );
        $cart = cart::find($request->hidden_id);
        $cart ->product_id = $request->product_id;
        $cart ->quantity = $request->quantity;
        
        $cart ->save();

        return redirect()->route('cart/cart')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cart $cart)
    {
       $cart=cart::find($id);
        $cart->delete();
        return redirect()->route('cart.index')->with('success', 'sters');
        // $cart = session('Cart', []);

        // if (!isset($cart[$productId]))
        // {
        //     // should not happen, and should throw an error.
        //     return null;
        // }
        // else
        // {
        //     if ($cart[$productId]['amount'] == 1){
        //         unset($cart[$productId]);
        //     }
        //     else
        //     {
        //         $cart[$productId]['amount'] -= 1;
        //     }
        // }
    
        // session(['cart' => $cart]);
        // return $cart;
    }
    }
