<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Brand;
use App\Models\M_Body;
use App\Models\M_Color;
use App\Models\M_Fuel;
use App\Models\M_Condition;
use App\Models\M_Transmission;
use App\Models\M_Product;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data_product = M_Product::all();
        $data_transmission = M_Product::with('transmission')->get();
        $data_condition = M_Product::with('condition')->get();
        return view('pages.product.index')->with([
            'data_product' => $data_product,
        ]);
     
    }
    public function create()
    {     
        $data_brand   = M_Brand::all();
        $data_body    = M_Body::all();
        $data_color   = M_Color::all();
        $data_fuel    = M_Fuel::all();
        $data_transmission = M_Transmission::all();
        $data_condition = M_Condition::all();

        return view('pages.product.create')->with([
            'data_brand' => $data_brand,
            'data_body'  => $data_body,
            'data_color' => $data_color,
            'data_fuel'  => $data_fuel,
            'data_transmission' => $data_transmission,
            'data_condition' => $data_condition,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = $request->except(['_token']);
       
        if($request->file('image1')){

            $imageName1 = time().'1.'.$request->file('image1')->extension();  
            $data['image1'] = $request->file('image1')->move('products', $imageName1);   

        }
        
        if($request->file('image2')){

            $imageName2 = time().'2.'.$request->file('image2')->extension();            
            $data['image2'] = $request->file('image2')->move('products', $imageName2);

        }
        
        
        if($request->file('image3')){

            $imageName3 = time().'3.'.$request->file('image3')->extension();  
            $data['image3'] = $request->file('image3')->move('products', $imageName3);

        }
        
        
        if($request->file('image4')){

            $imageName4 = time().'4.'.$request->file('image4')->extension();  
            $data['image4'] = $request->file('image4')->move('products', $imageName4);

        }
        

        $data['created_by'] = \Auth::user()->id;
        $data['created_at'] = date('Y-m-d H:i:s');  
        M_Product::insert($data);
        \Session::flash('Success', 'Data entered successfully');
        return redirect('product');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data_product = M_Product::findOrFail($id);
        $data_brand   = M_Brand::all();
        $data_body    = M_Body::all();
        $data_color   = M_Color::all();
        $data_fuel    = M_Fuel::all();
        $data_transmission = M_Transmission::all();
        $data_condition = M_Condition::all();

        return view('pages.product.edit')->with([
            'data_product' => $data_product,
            'data_brand' => $data_brand,
            'data_body'  => $data_body,
            'data_color' => $data_color,
            'data_fuel'  => $data_fuel,
            'data_transmission' => $data_transmission,
            'data_condition' => $data_condition,
        ]);

    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = M_Product::findOrFail($id);
        $data = $request->except(['_token']);
       
        if($request->file('image1')){
            $imageName1 = time().'1.'.$request->file('image1')->extension();  
            $data['image1'] = $request->file('image1')->move('products', $imageName1); 
            if($item->image1 != '' ){  
            unlink($item->image1);
            }
        }

        if($request->file('image2')){
            $imageName2 = time().'2.'.$request->file('image2')->extension();            
            $data['image2'] = $request->file('image2')->move('products', $imageName2);
            if($item->image2 != '' ){
            unlink($item->image2);
            }
        }
        
        if($request->file('image3')){
            $imageName3 = time().'3.'.$request->file('image3')->extension();  
            $data['image3'] = $request->file('image3')->move('products', $imageName3);
            if($item->image3 != '' ){
            unlink($item->image3);
            }
        }
        
        if($request->file('image4')){
            $imageName4 = time().'4.'.$request->file('image4')->extension();  
            $data['image4'] = $request->file('image4')->move('products', $imageName4);
            if($item->image4 != '' ){
            unlink($item->image4);
            }
        }

        if($request->isdeleteimage1 == 1){
            $data['image1'] = '';
            if($item->image1 != '' ){
            unlink($item->image1);
            }
        }

        if($request->isdeleteimage2 == 1){
            $data['image2'] = '';
            if($item->image2 != '' ){
            unlink($item->image2);
            }
        }

        if($request->isdeleteimage3 == 1){
            $data['image3'] = '';
            if($item->image3 != '' ){
            unlink($item->image3);
            }
        }

        if($request->isdeleteimage4 == 1){
            $data['image4'] = '';
            if($item->image4 != '' ){
            unlink($item->image4);
            }
        }
        
        $data['updated_by'] = \Auth::user()->id;
        $data['updated_at'] = date('Y-m-d H:i:s');  
        $item->update($data);
        \Session::flash('Success', 'Data updated successfully');
        return redirect('product');
    }

    public function destroy($id)
    {
        $data = M_Product::findOrFail($id);

        if(!$data->image1 == ''){
            unlink($data->image1);
        }
        
        if(!$data->image2 == ''){
            unlink($data->image2);
        }
        
        if(!$data->image3 == ''){
            unlink($data->image3);
        }
        
        if(!$data->image4 == ''){
            unlink($data->image4);
        }
        $data->delete();
        \Session::flash('Success', 'Data deleted successfully');
        return redirect('product');
    }

}
