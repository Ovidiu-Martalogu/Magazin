<?php

namespace App\Http\Controllers;

use App\Models\productsModel;
use Illuminate\Http\Request;


class productsController extends Controller
{
  

    public function index()
    {
        $data = productsModel::latest()->paginate(10);
        
        return view('products/index', compact('data'))->with('i', (request()->input('page', 1) - 1 * 10));
      
    }
    public function create()
    {
        return view('products/create');
    }

    public function store(Request $request)
    {
     
        $request->validate(
            [
                "product_name" => "required",
                "description" => "required",
                "color" => "required",
                "image" => "required|image|mimes:jpg,png,jpeg",
                "price" => "required",
                "discount" => "required"
            ]
        );

        $file_name = time() . "." . request()->image->getClientOriginalExtension();
        request()->image->move(public_path("/images"), $file_name);

        $product = new productsModel();
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->color = $request->color;
        $product->image = $file_name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->save();

        return redirect()->route('products.index')->with('success', 'produs adaugat');
    }
    public function show(productsModel $product)
    {
        return view('show', compact("product"));
    }

    public function edit(productsModel $product)
    {
        return view('products/edit', compact("product"));
    }

    public function update(Request $request, productsModel $product)
    {
        $request->validate(
            [
                "product_name" => "required",
                "description" => "required",
                "color" => "required",
                "image" => "required|image|mimes:jpg,png,jpeg",
                "price" => "required",
                "discount" => "required"
                
            ]
        );

        if ($request->imagine != "") {
            $file_name = time() . "." . request()->image->getClientOriginalExtension();
            request()->image->move(public_path("/images"), $file_name);
        }
        $product = productsModel::find($request->hidden_id);
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->color = $request->color;
        $product->price = $request->price;
        $product->discount = $request->discount;
        
        if (!empty($file_name)) {
            $product->image = $file_name;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'produs modificat');
    }
    public function destroy($id)
    {
        $product=productsModel::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'produs sters');
        
    }
}
/*
 public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found!');
        }

        // Add product to cart
        $cart = session()->get('cart', []);
        $cart[$productId] = [
            'name' => $product->name,
            'price' => $product->price,
        ];
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }*/

//     public function removeCartItem(Request $request)
//     {
//         if ($request->id) {

//             $cart = session()->get('cart');

//             if (isset($cart[$request->id])) {

//                 unset($cart[$request->id]);

//                 session()->put('cart', $cart);
//             }

//             session()->flash('success', 'Product removed successfully');
//         }
//     }

//     public function clearCart()
// {
//     session()->forget('cart');
//     return redirect()->back();
// }



