<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class HomeController extends Controller
{
    public function index()
    {
        $word = "Hello World"; // string 
        $float = 1.3; // float
        $statement = true; // boolean
        $array = [1, 2, 3]; // array

        
        $number = 1; // integer
        $number2 = 2; // integer


        dump($word);
        dump($number);
        dump($float);
        dump($statement);
        dump($array);
        dump($number + $number2);












        

    }
}