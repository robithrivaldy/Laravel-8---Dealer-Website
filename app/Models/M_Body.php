<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class M_Body extends Model
{
    
    use SoftDeletes;
    protected $table = 'body_master';
    protected $fillable = [

        'body'

    ];
    protected $hidden = [];
}
