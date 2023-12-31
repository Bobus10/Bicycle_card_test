<?php

namespace App\Http\Controllers;

use App\Models\BicycleCardSubject;
use App\Models\Subject;
use Illuminate\Http\Request;

class BicycleCardSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BicycleCardSubject.index', [
            'subjects' => Subject::all(),
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
    // public function show(BicycleCardSubject-ModelName $bicycleCardSubject)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(BicycleCardSubject $bicycleCardSubject)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, BicycleCardSubject $bicycleCardSubject)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(BicycleCardSubject $bicycleCardSubject)
    // {
    //     //
    // }
}
