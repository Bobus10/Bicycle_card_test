<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\BicycleCardTest;
use App\Models\Question;
use Illuminate\Http\Request;

class BicycleCardTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BicycleCardTest.index', [
            'questions' => Question::paginate(1),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('BicycleCardTest.show', [
            'question' => Question::where('id', $id)->first(),
        ]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(BicycleCardTest $bicycleCardTest)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, BicycleCardTest $bicycleCardTest)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(BicycleCardTest $bicycleCardTest)
    // {
    //     //
    // }
}
