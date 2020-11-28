<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
 function showView(){
        $name="emine";
        $job="Bilgisayar Mühendisi";
        $city="Gaziantep";
        return view('hakkimda',compact('name','job','city'));
    }
}
