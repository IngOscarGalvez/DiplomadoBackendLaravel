<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = Crud::all();
        return $crud;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $crud = new Crud();
        $crud->name = $request->name;
        $crud->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $crud = Crud::query()->where('id','=',$id)->first();
        return $crud;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $crud = Crud::query()->where('id','=',$id)->first();
        $crud->name = $request->name;
        $crud->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $crud = Crud::destroy($id);
    }
}
