<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class M_Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'price',
        'brand_id',
        'body_id',
        'color_id',
        'fuel_id',
        'transmission_id',
        'condition_id',
        'year',
        'mileage',
        'engine_capacity',
        'image1',
        'image2',
        'image3',
        'image4',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at'
    ];
    protected $hidden = [];

    public function brand()
    {
        return $this->belongsTo(M_Brand::class, 'brand_id', 'id');
    }

    public function body()
    {
        return $this->belongsTo(M_Body::class, 'body_id', 'id');
    }
    public function color()
    {
        return $this->belongsTo(M_Color::class, 'color_id', 'id');
    }

    public function fuel()
    {
        return $this->belongsTo(M_Fuel::class, 'fuel_id', 'id');
    }
    public function transmission()
    {
        return $this->belongsTo(M_Transmission::class, 'transmission_id', 'id');
    }

    public function condition()
    {
        return $this->belongsTo(M_Condition::class, 'condition_id', 'id');
    }


}
