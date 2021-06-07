<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Color extends Model
{
    use SoftDeletes;
    protected $table = 'color_master';
    protected $fillable = [

        'color'

    ];
    protected $hidden = [];
}
