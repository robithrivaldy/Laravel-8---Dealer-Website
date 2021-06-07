<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Brand;

class M_BrandController extends Controller
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
        return view('pages.masters.brand.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masters.brand.create');
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
            'brand' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except(['_token']);

        if($request->file('image')){
            $imageName1 = time().'1.'.$request->file('image')->extension();  
            $data['image'] = $request->file('image')->move('brand', $imageName1);   
        }


        $data['created_by'] = \Auth::user()->id;
        $data['created_at'] = date('Y-m-d H:i:s');
        M_Brand::insert($data);
        \Session::flash('Success', 'Data entered successfully');
        return redirect('master/brand');
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
        $item = M_brand::findorFail($id);   
        return view('pages.masters.brand.edit', compact('item'));
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
        $this->validate($request, [
            'brand' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = M_Brand::findOrFail($id);
        $data = $request->except(['_token']);
       
        if($request->file('image')){
            $imageName1 = time().'1.'.$request->file('image')->extension();  
            $data['image'] = $request->file('image')->move('brand', $imageName1); 
            if($item->image != '' ){  
            unlink($item->image);
            }
        }


        if($request->isdeleteimage1 == 1){
            $data['image'] = '';
            if($item->image != '' ){
            unlink($item->image);
            }
        }

        
        $data['updated_by'] = \Auth::user()->id;
        $data['updated_at'] = date('Y-m-d H:i:s');  
        $item->update($data);
        \Session::flash('Success', 'Data updated successfully');
        return redirect('master/brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Brand::findOrFail($id);
        $item->delete();
        \Session::flash('Success', 'Data deleted successfully');
        return redirect('master/brand');
    }
}
