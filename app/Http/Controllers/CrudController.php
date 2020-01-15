<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    //
    public function index()
    {
    	return Crud::all();
    }

    public function create()
    {
    	return "ini halaman create";
    }
    public function show($id)
    {
    	$artikel = Crud::where('id', $id)->firstOrFail();
    	return $artikel;
    }
    public function edit($id)
    {
        $artikel = Crud::where('id', $id)->firstOrFail();
    	return $artikel;
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {
    	$artikel = Crud::where('id', $id)->firstOrFail();
    	return $artikel->delete();
    }
}
