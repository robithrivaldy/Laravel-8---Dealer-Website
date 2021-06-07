<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class M_Condition extends Model
{
    use SoftDeletes;
    protected $table = 'condition_master';
    protected $fillable = [

       'condition'

    ];
    protected $hidden = [];
}
