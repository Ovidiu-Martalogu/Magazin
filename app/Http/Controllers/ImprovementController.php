<?php

namespace App\Http\Controllers;

use App\Models\improvement;
use App\Http\Requests\StoreimprovementRequest;
use App\Http\Requests\UpdateimprovementRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImprovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
       // $data=DB::table('users')->leftJoin('improvements','id','=','users_id')->get();
        $data = improvement::latest()->paginate(10);
        
        return view('improvement/indeximprovement', compact('data'))->with('i', (request()->input('page', 1) - 1 * 10));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        return view('improvement/createimprovement',  compact("users"));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                //"Users_id"=>"required",
                "Adress" => "required",
                "Phone" => "required",
                "Desired_product" => "required",
                "Feedback" => "required",
               
            ]
        );


        $improvement = new improvement();
        $improvement->Users_id=$request->Users_id;
        $improvement->Adress = $request->Adress;
        $improvement->Phone = $request->Phone;
        $improvement->Desired_product = $request->Desired_product;
        $improvement->Feedback = $request->Feedback;
        
        $improvement->save();

        return redirect()->route('improvement.index')->with('success', 'Va multumim si va asiguram ca in cel mai scurt timp posibil,
         produsul solicitat de catre dumneavoastra va face parte din oferta noastra.
         Imediat ce produsul va fi disponibil, va vom contacta!');
    }

    /**
     * Display the specified resource.
     */
    public function show(improvement $improvement)
    {
        return view('show', compact("improvement"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(improvement $improvement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateimprovementRequest $request, improvement $improvement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $improvement=improvement::find($id);
        $improvement->delete();
        return redirect()->route('improvement.index')->with('success', 'Sugestie stearsa');
    }
}
