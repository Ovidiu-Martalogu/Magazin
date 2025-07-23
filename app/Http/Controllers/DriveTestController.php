<?php

namespace App\Http\Controllers;

use App\Models\drive_test;
use App\Models\productsModel;
use App\Http\Requests\Storedrive_testRequest;
use App\Http\Requests\Updatedrive_testRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriveTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=DB::table('products')->rightJoin('drive_tests','product_id','=','id')
        ->orderBy('drive_id','desc')->get();
        //$data = drive_test::latest()->paginate(10);
        return view('driveTest/indexDrive', compact('data'))->with('i', (request()->input('page', 1) - 1 * 10));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=productsModel::all();
        return view('driveTest/createDrive',  compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                 "name" => "required",
                 "desired_period" => "required",
                "product_id" => "required",
               
               
            ]
        );

       
        $test = new drive_test();
        $test->name = $request->name;
        $test->desired_period = $request->desired_period;
        $test->product_id = $request->product_id;
       
       
        $test->save();

        return redirect()->route('drive_test.index')->with('success', 'Va asteptam cu drag!');
    }

    /**
     * Display the specified resource.
     */
    public function show(drive_test $drive_test)
    {
        return view('show', compact("drive_test"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(drive_test $drive_test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedrive_testRequest $request, drive_test $drive_test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(drive_test $drive_test)
    {
        //
    }
}
