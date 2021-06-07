<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class M_Dealer extends Model
{
    use SoftDeletes;
    protected $table = 'dealer';
    protected $fillable = [
       'name',
       'email',
       'phonenumber',
       'about',
       'address',
       'image',
       'googlemaps',
       'created_by',
       'created_at',
       'updated_by',
       'updated_at'
    ];
    
    protected $hidden = [];
}
