<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseStatusCodeSame;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    //
    public function index(Request $request,$id)
    {
        $name="Donal Trump";
        $age="75";
        $data=['id'=>$id,'name'=>$name,'age'=>$age,];

        $cookie_name="access_token";
        $value="123-XYZ";
        $minutes=1;
        $path ="/"; ;
        $domain =$_SERVER['SERVER_NAME'];  
        $secure =false ;
        $httpOnly = true;

        return response()->json($data,status: 200)->withCookie(cookie($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly));
      



    }
   
}
