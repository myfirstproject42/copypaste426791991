<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastas extends Model
{
    protected $table = 'pasta';
    protected $fillable = ['hash_id','text', 'name', 'expirate', 'access','updated_at'];
}
