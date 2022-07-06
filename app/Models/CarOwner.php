<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarOwner extends Model
{
    protected $table = 'car_owners';

    protected $fillable = [
        'user_id',
        'car_id',
        'buying_cost',
        'selling_cost',
        'info',
        'buying_date',
        'selling',
    ];
    use HasFactory;


    public function getCarOwners(){
        return $this->join('users','car_owners.user_id','=','users.id')
            ->join('cars','car_owners.car_id','=','cars.id')
            ->get();
    }
}
