<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{

    /**
     * @return mixed
     */
    public function index()
    {
        return view('welcome');
    }

}
