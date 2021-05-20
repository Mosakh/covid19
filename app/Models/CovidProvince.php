<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidProvince extends Model
{
    use HasFactory;

    protected $table = 'provinces';
    protected $fillable = ['name','area_id'];

}
