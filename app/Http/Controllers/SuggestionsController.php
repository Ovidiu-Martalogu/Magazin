<?php

namespace App\Http\Controllers;

use App\Models\Suggestions;
use App\Models\User;
use App\Http\Requests\StoreSuggestionsRequest;
use App\Http\Requests\UpdateSuggestionsRequest;
use Illuminate\Http\Request;

class SuggestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $data = Suggestions::latest()->paginate(10);
        
        return view('suggestions/indexSuggestions', compact('data'))->with('i', (request()->input('page', 1) - 1 * 10));
       
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suggestions/createSuggestion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "FullName" => "required",
                "Adress" => "required",
                "Phone" => "required",
                "Suggestions" => "required",
                "Improvements" => "required",
               
            ]
        );


        $suggestion = new Suggestions();
        $suggestion->FullName = $request->FullName ;
        $suggestion->Adress = $request->Adress;
        $suggestion->Phone = $request->Phone;
        $suggestion->Suggestions = $request->Suggestions;
        $suggestion->Improvements = $request->Improvements;
        
        $suggestion->save();

        return redirect()->route('suggestions.index')->with('success', 'Va multumim si va asiguram ca in cel mai scurt timp posibil,
         produsul solicitat de catre dumneavoastra va face parte din oferta noastra.
         Imediat ce produsul va fi disponibil, va vom contacta!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Suggestions $suggestions)
    {
        return view('show', compact("suggestions"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suggestions $suggestions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuggestionsRequest $request, Suggestions $suggestions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $suggestion=Suggestions::find($id);
        $suggestion->delete();
        return redirect()->route('suggestions.index')->with('success', 'Sugestie stearsa');
    }
}
