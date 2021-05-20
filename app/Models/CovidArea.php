<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CovidProvince;
use Illuminate\Support\Facades\DB;

class CovidArea extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $fillable = ['name'];

    public function province()
    {
        return $this->belongsTo(CovidProvince::class, 'area_id');
    }

    public function JoinData()
    {
        return DB::table('areas as a')
                ->leftjoin('provinces as p', 'p.area_id', '=', 'a.id')
                ->select('a.name as area_name', 'p.name as province_name')
                // ->groupBy('a.name')
                ->get();
    }

    public function JoinFetch()
    {
        return DB::table('areas as a')
                ->leftjoin('provinces as p', 'p.area_id', '=', 'a.id')
                ->select('a.name as area_name', 'p.name as province_name');

    }
}
