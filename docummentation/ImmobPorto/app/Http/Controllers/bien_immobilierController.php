<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bien_immobilier;
use Illuminate\Support\Facades\Auth;
use App\Models\HomeController;
class bien_immobilierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $immobilier = bien_immobilier::all();
        return view('immo.accueil' ,compact('immobilier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('immo.publier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
		'status'=> 'required' ,
		'description' => 'required',
		'addresse' => 'required',
		//'photo' => 'required',
		'prix' => 'required',
		]) ;
	$bien_immobilier = new bien_immobilier ;
	$bien_immobilier->status = $request->status ;
	$bien_immobilier->description = $request->description ;
	$bien_immobilier->addresse = $request->addresse ;
	$bien_immobilier->photo = "rien" ;
	$bien_immobilier->prix = $request->prix ;
	$bien_immobilier->users_id=Auth::id();
	$bien_immobilier->save() ;
	return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
