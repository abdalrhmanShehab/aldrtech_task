<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['image','title','description'];
    protected $table    = 'works';
    protected $primarykey ='id';    
}
