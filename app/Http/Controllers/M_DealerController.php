<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Dealer;
class M_DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_dealer = M_Dealer::Findorfail(1);
        return view('pages.dealer.edit')->with([
                'data_dealer' => $data_dealer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
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
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = M_Dealer::findOrFail($id);
        $data = $request->except(['_token']);
       
        if($request->file('image')){
            $imageName = time().'.'.$request->file('image')->extension();  
            $data['image'] = $request->file('image')->move('dealer', $imageName); 
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
        return redirect('m_dealer');
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
