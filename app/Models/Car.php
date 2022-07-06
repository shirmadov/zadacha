<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'model',
        'slug',
        'brand',
        'info',
    ];
    use HasFactory;

    public function getCars(){
        return $this
            ->leftJoin('car_owners','cars.id','=','car_owners.car_id')
            ->where('car_owners')
            ->get();
    }
}
