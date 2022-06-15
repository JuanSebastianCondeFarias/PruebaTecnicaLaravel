<?php

namespace App\Http\Controllers;

use App\Models\Children;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Children::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $children = Children::create([
            'name' => $request->name,
            'age' => $request->age,
            'employees_id' => $request->employees_id
          ]);

        return $children;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function show(Children $children)
    {
        return $children;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Children $children)
    {
        
        $children->update($request->only(['name', 'age']));
        
        return response()->json('Se actualizo el registro:'. $children->id,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function destroy(Children $children)
    {
        $children->delete();
        return response()->json("Se elimino el registro: ".$children->id,202);
    }
}
