<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class CarController extends Controller
{
    public function index(): View
    {
        $cars = [
            'Toyota',
            'Honda',
            'Ford',
            'Chevrolet',
            'Nissan',
            'BMW',
            'Mercedes-Benz',
            'Audi',
            'Volkswagen',
            'Tesla',
        ];

        $numberOfCars = count($cars);
        //dd($numberOfCars);

        return view('car')
            ->with('numberOfCars', $numberOfCars)
            ->with('cars', $cars); 
    }
}