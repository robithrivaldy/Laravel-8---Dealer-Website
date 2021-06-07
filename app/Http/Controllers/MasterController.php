<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Brand;
use App\Models\M_Body;
use App\Models\M_Color;
use App\Models\M_Fuel;
use App\Models\M_Condition;
use App\Models\M_Transmission;


class MasterController extends Controller
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

    public function index($var)
    {
        $brand = '';
        $body ='';
        $color = '';
        $fuel = '';
        $transmission = '';
        $condition = '';

        if($var == 'model'){
            $model= 'active';
        }elseif($var == 'brand'){
            $brand = 'active';
        }elseif($var == 'body'){
            $body = 'active';
        }elseif($var == 'color'){
            $color = 'active';
        }elseif($var == 'fuel'){
            $fuel = 'active';
        }elseif($var == 'transmission'){
            $transmission = 'active';
        }elseif($var == 'condition'){
            $condition= 'active';
        }


        $data_brand   = M_Brand::all();
        $data_body    = M_Body::all();
        $data_color   = M_Color::all();
        $data_fuel    = M_Fuel::all();
        $data_transmission = M_Transmission::all();
        $data_condition = M_Condition::all();

        return view('pages.masters.index')->with([
            'brand' => $brand,
            'body' => $body,
            'color' => $color,
            'fuel' => $fuel,
            'transmission'=> $transmission,
            'condition' => $condition,
            'data_brand' => $data_brand,
            'data_body' => $data_body,
            'data_color' => $data_color,
            'data_fuel' => $data_fuel,
            'data_transmission' => $data_transmission,
            'data_condition' => $data_condition,
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
        //
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
