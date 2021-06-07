<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Product;
use App\Models\M_Brand;

class HomeController extends Controller
{
    public $coba;
    public function __constuct(){
        $this->coba = 'aa';
        View::share('m_dealer', $this->coba);
    }
    public function index()
    {
        $data_product = M_Product::orderBy('id', 'desc')->paginate(8);
        $data_brand = M_Brand::all();
        return view('pages-website.index')->with([
            'data_product' => $data_product,
            'data_brand' => $data_brand
        ]);
    }

}
