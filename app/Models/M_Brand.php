<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class M_Brand extends Model
{
    use SoftDeletes;

    protected $table = 'brand_master';
    protected $fillable = [
        'brand',
        'image'
    ];
    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo(M_Product::class, 'id', 'id');
    }


}
