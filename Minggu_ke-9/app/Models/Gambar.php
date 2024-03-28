<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gambar extends Model
{
    use SoftDeletes;
    
    protected $table = "gambars";
 
    protected $fillable = ['file','keterangan'];

    protected $dates = ['deleted_at'];
}
