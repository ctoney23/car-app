<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class HomeController extends Controller
{
    public function index(): View
    {
        $firstname = "John";
        echo "Hello, $firstname!";
        echo 'Hello,' . $firstname;
       



        // MVC design pattern MODEL, VIEW, CONTROLLER
        // CONTROLLER = HomeController only for your php logic
        // VIEW = welcome.blade.php always work with html in the view

        $name = "John Doe";
        $sum = 1 + 2;
        return view('welcome')
            ->with('sum', $sum)
            ->with('name', $name);
    }
}