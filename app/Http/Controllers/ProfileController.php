<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request) {
        // Declare variables
        $name = "Donal Trump" ;
        $age = "75";

        //three variables in $data variable as associative array with values
        $data = [
                    "id"=>$request->id,
                    "name"=>$name,
                    "age"=>$age
               ];

        //Set cookie variables
        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure=false;
        $httpOnly=true;

        //the return statement 
        return response($data)->cookie($name, $value,$minutes,$path,$domain,$secure,$httpOnly); 
    }
}
