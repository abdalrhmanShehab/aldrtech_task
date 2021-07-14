<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfilio extends Model
{
    protected $fillable =['name','data_class','image','title','text'];
    protected $table ="portfilios";
    protected $primarykey ='id';
}
