<?php
namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller as ControllersController;

class LougoutController extends ControllersController{
    public function store()
    {

        return view('home');
    }

}

