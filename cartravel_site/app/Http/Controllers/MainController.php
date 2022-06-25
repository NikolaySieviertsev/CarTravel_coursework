<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Review;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Tour;
use App\Models\Number;
use App\Models\Trip;
use App\Models\Client;
use App\Models\Manager;

class MainController extends Controller
{

    public static function home(){
        return view('home');
    }

    public static function sales(){
        return view('sales');
    }

    public static function about(){
        return view('about');
    }

    public static function contact_us(){
        return view('contact_us');
    }
    
    public static function tours(){
        $params = Tour::all();
        return view('tours', ['tours' => $params]);
    }

    public static function tour_order($id){
        $params = Tour::where('id', $id)->first();
        return view('tour_order', ['tour' => $params]);
    }

    public static function cars(){
        $params = Car::all();
        return view('cars', ['cars' => $params]);
    }

    public static function car_order($id){
        $params = Car::where('id', $id)->first();
        return view('car_order', ['car' => $params]);
    }

    public function call_me(Request $request){
        $phone = $request->input('number');
        if(preg_match('/^[0-9]{12}+$/', $phone)) {
        $number = Number::firstOrCreate(array('phone' => $phone));
        return view('contact_us', ['phone' => Number::where('phone', $phone)->first()]);}
        else {return view('home');}
    }


    public function db($id1, $id2){
        if ((isset(Trip::find($id1)->managers)) and (isset(Manager::find($id2)->trips))) {
            $manager = Trip::find($id1)->managers;
            $trip = Manager::find($id2)->trips;
            $my_trip = Trip::where('client', 1)->get();
            $my_client = Client::whereIn('id', Trip::where('name', 'Dubai')->get(['client']))->get();
        }
        return view('db', ['trips' => $trip, 'managers' => $manager, 'my_trips' => $my_trip, 'my_clients' => $my_client]);
    }
}