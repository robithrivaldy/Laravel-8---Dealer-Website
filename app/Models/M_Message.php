<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Message extends Model
{
    use SoftDeletes;
    protected $table = 'message';
    protected $fillable = [
        'name',
       'email',
       'phonenumber',
       'message',
       'created_at',
       'updated_at'
    ];
    protected $hidden = [];
}
