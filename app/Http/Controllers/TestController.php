<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarOwner;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(CarOwner $carOwner, Car $car){

        $cars_owners = $carOwner->getCarOwners();
        $cars = $car->getCars();

        dd($cars);


        return view('zadacha1/index',[
            'car_owners' => $cars_owners
        ]);
    }

    public function calculate(){
        return view('calculate.calculate');
    }

    public function pogoda(){

//        $tuCurl = curl_init();
//
//        $headerData = [
//            'Accept: application/json',
//            'Content-type: application/json'
//        ];
//
//        curl_setopt($tuCurl, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather?q=Ivanovo&appid=9682d953b6025383546b329598febfd9&lang=ru");
//        curl_setopt($tuCurl, CURLOPT_HTTPGET, true);
//
//        curl_setopt($tuCurl, CURLOPT_HTTPHEADER, $headerData);
//        curl_setopt($tuCurl, CURLOPT_ENCODING, 'gzip,deflate');
//        curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($tuCurl, CURLOPT_HEADER, true);
////        $tuData = curl_exec($tuCurl);
//
//        $response = curl_exec($tuCurl);
//        list($headerContent, $jsonData) = explode("\r\n\r\n", $response, 2);
//
//        dd(json_decode($jsonData));


    }


}
