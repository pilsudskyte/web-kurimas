<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Car;
Use App\Owner;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view("cars", ["cars"=>$cars] );

        // $carCount =  carsItem::count(); // grazins skaiciu 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Cars = Car::all();
        
        // Kreipiames i /resources/views/owners/create.blade.php
        return view('car.create', ["Cars" => $Cars]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new car();
        // priskiriu car teksta kuris atejo is formos
        $car->car_name = $request->car_name;

        $car->car_id = 1; //user id visada bus 1
        $car->car_id = $request->car_id;

        // issaugome i duombaze
        $car->save();

        return redirect()->route('cars.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
            {
            // Kreipiames i modeli NewsItem
            /* Modelio dokumentacija :
            https://laravel.com/docs/5.6/eloquent
            */
        $car = Car::find($id);
        
        $allOwners = Owner::where("car_id", $id)->get();
       
        return view('carsItem', [
            "car" => $car,
            "owners" => $allOwners
            // "carCount" => $carCount
       ]);
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         // pasiemu redaguojama masina
         $car = Car::find($id);
         $cars = car::all();
         
         return view('car.edit',[
             "car" => $car, 
             "owner" => $allOwners
         ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = car::find($id);
        $car->carsItem = $request->carsItem;
        $car->car_id = $request->car_id;

        $car->save();

        return redirect()->route('cars.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Gaunu car pagal ID
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('cars.index');
    }
    }
