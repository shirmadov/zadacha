<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $cars = [
//            ['Audi',['100','80','A3','A4','A5','A7']],
//            ['BMW',['X1','X6','i3','M2','M4','M6']],
//            ['Ford',['C-MAX','EcoSport','Escape','Escort','S-MAX']],
//            ['Renault',['Arkana','Duster','Fluence','Kaptur','Koleos','Laguna']],
//            ['Volvo',['S40','S60','S80','S90','V70','XC40','XC60']],
//            ['Bentley',['Arnage','The Bentayga Ewb Range','Past Models']],
//            ['Fiat',['500','500L','Albea','Brava','Bravo','Doblo']],
//            ['Nissan',['Almera','Juke','Primera','Qashqai','Tiida','X-Trail']],
//            ['Porsche',['911','Cayenne','Cayman','Macan','Taycan','Panamera']],
//            ['Tesla',['Model 3','Model S','Model X']],
//            ['Toyota',['Auris','Avensis','Camry','Corolla','Prius','Carina']],
//            ['Mercedes-Benz',['C-class','E-class','G-class','M-class','S-class','GLC']],
//            ['Volkswagen',['Caddy','Caravelle','Jetta','Passat','Polo','Golf']],
//        ];
//
//        $info = array("year"=>1996,"color"=>'black',"wheel"=>'left' ,"crash"=>false, "mileage"=>43,);
//
//
//        foreach ($cars as $car){
//
//           foreach ($car[1] as $model){
//
//               DB::table('cars')->insert([
//                   'model' => $model,
//                   'slug' => strtolower(str_replace(" ", "_", $model)),
//                   'brand' => $car[0],
//                   'info' => json_encode($info),
//               ]);
//           }
//        }

        $cars = Car::all()->pluck('id')->random(10);
        $users = User::all()->pluck('id')->random(5);
        $info = array(
            "crash"=>false,
            "mileage"=>43
        );

//        dd($users);

        foreach ($cars as $car){
            for ( $i=0; $i<2; $i++ ){
                DB::table('car_owners')->insert([
                    'user_id'       =>$users[rand(0,4)],
                    'car_id'        =>$car,
                    'buying_cost'   =>rand(1000,320000),
                    'selling_cost'  =>rand(1000,120000),
                    'info'          =>json_encode($info),
                    'buying_date'   =>Carbon::now(),
                    'selling_date'  =>Carbon::now(),
                ]);
            }
        }





    }
}
