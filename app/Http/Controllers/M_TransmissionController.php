<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Transmission;
class M_TransmissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.masters.transmission.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masters.transmission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate($request, [
            'transmission' => 'required'
        ]);

        $data = $request->except(['_token']);
        $data['created_by'] = \Auth::user()->id;
        $data['created_at'] = date('Y-m-d H:i:s');
        M_Transmission::insert($data);
        \Session::flash('Success', 'Data entered successfully');
        return redirect('master/transmission');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = M_Transmission::findorFail($id);   
        return view('pages.masters.transmission.edit', compact('item'));
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
        $data = $request->all();
        $item = M_Transmission::findOrFail($id);
        $item->update($data);
        \Session::flash('Success', 'Data updated successfully');
        return redirect('master/transmission');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Transmission::findOrFail($id);
        $item->delete();
        \Session::flash('Success', 'Data deleted successfully');
        return redirect('master/transmission');
    }
}
