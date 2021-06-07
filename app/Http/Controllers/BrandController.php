<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Brand;
use App\Models\M_Product;
class BrandController extends Controller
{
   
    public function index()
    {
        $data_brand = M_Brand::all();
        return view('pages-website.brands')->with([
                'data_brand' => $data_brand
        ]);
        
    }

    public function show($id){
        $title_brand = M_Brand::findOrFail($id);
        $data_brand  = M_Product::where('brand_id','=',$id)->get();
        return view('pages-website.brandspage')->with([
                'data_brand' => $data_brand,
                'title_brand' => $title_brand
         ]);
    }
    
}
