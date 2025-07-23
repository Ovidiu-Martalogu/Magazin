<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\orders;
use App\Models\productsModel;
use App\Http\Requests\StoreordersRequest;
use App\Http\Requests\UpdateordersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
       $data=DB::table('products')->leftJoin('orders','product_id','=','id')
       ->orderBy('order_Id','desc')->get();
        
       //$data = orders::latest()->paginate(10);
        return view('orders/indexOrder', compact('data'))->with('i', (request()->input('page', 1) - 1 * 10));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $products=productsModel::all();
        return view('orders/createOrders',  compact("products"));
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

       
        $order = new orders();
        //$order->order_id = $request->order_id;
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
       
        $order->save();

        return redirect()->route('orders.index')->with('success', 'comanda procesata');
    }

    /**
     * Display the specified resource.
     */
    public function show(orders $orders)
    {
        
        return view('show', compact("orders"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orders $orders)
    {
        return view('edit', compact("orders"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateordersRequest $request, orders $orders)
    {
        $request->validate(
            [
                "order_id" => "required",
                "product_id" => "required",
                "quantity" => "required",
                
            ]
        );

        
        $order = orders::find($request->hidden_id);
        $order->order_id = $request->order_id;
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        

        $order->save();

        return redirect()->route('orders.indexOrder')->with('success', 'comanda modificata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orders $orders)
    {
        //
    }
}
